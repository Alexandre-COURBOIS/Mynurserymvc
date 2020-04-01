<?php

// app/Controller/ArticleController

namespace App\Controller;

use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;
use App\Model\ArticleModel;


class ArticleController extends Controller
{
    public function index()
    {
        // aller chercher tous les articles
        $articles = ArticleModel::all();
        $count = ArticleModel::count();
        //$this->debug($articles);
        $this->render('app.article.listing',array(
            // faire passer les articles à la vue dans view/app/article/listing.php
            'articles' => $articles,
            'count' => $count
        ));
    }

    public function single($id)
    {
        // request pour aller chercher l'article qui possede cet id
        $article = ArticleModel::findById($id);
        if(empty($article)) {
            // si article n'existe pas dans la BDD => error 404
            //die('404');
            $this->Abort404();
        }
        $this->render('app.article.single',array(
            // faire passer l'article à la vue dans view/app/article/single.php
            'article' => $article
        ));

    }

    public function add()
    {
        $errors = array();
        if(!empty($_POST['submitted'])) {
            // protection Faille xss
            $post = $this->cleanXss($_POST);
            // validation
            $validation = new Validation();
            $errors['title'] = $validation->textValid($post['title'], 'title',3,  150);
            $errors['content'] = $validation->textValid($post['content'], 'content',10,  1500);
            if($validation->IsValid($errors)) {
                // insert
                ArticleModel::insert($post);
                $this->redirect('articles');
            }
        }
        $form = new Form($errors);
        $this->render('app.article.add',array(
            'form'  => $form
        ));
    }

    public function update($id)
    {
        $errors = array();
        $article = ArticleModel::findById($id);
        if(empty($article)) { $this->Abort404(); }
        if(!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors['title'] = $validation->textValid($post['title'], 'title',3,  150);
            $errors['content'] = $validation->textValid($post['content'], 'content',10,  1500);
            if($validation->IsValid($errors)) {
                // update
                ArticleModel::update($id,$post);
                $this->redirect('articles');
            }
        }
        $form = new Form($errors);
        $this->render('app.article.update',array(
            'form'     => $form,
            'article'  => $article
        ));
    }

    public function delete($id)
    {
        $article = ArticleModel::findById($id);
        if(empty($article)) { $this->Abort404(); }
        ArticleModel::delete($id);
        $this->redirect('articles');
    }

}
