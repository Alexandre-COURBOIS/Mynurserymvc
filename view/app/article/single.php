<?php // view/app/article/single.php ?>

<table>
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>created_at</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $article->id; ?></td>
            <td><?= $article->title; ?></td>
            <td><?= nl2br($article->content); ?></td>
            <td><?= date('d/m/Y',strtotime($article->created_at)); ?></td>
        </tr>
    </tbody>
</table>
