<h2>Vos reservations</h2>

<table class="table table-hover" id="table_resa">
    <thead>
    <tr>
        <th scope="col">Date</th>
        <th scope="col">Horaire début</th>
        <th scope="col">Horaire fin</th>
        <th scope="col">Nombre de réservation</th>
        <th scope="col">Capacité maximum</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $_SESSION['login']['cap_max']; ?></td>
    </tr>
    </tbody>
</table>

<form action="" method="post" class="form-style">
    <h2 class="text-center pt-4">Reservation</h2>
    <div class="form-row">
        <div class="col-md-2 mx-auto mt-3">
            <label name="date_resa" for="date_resa" class="form-control">Date résa</label>
            <div class="form-group">
                <input id="date_resa" value="jj/mm/aaaa" class="form-control"/>
            </div>
        </div>
        <div class="col-md-2 mx-auto mt-3">
            <label name="time_debut" for="time_debut" class="form-control">Créneau début</label>
            <div class="form-group">
                <input id="time_debut" type="text" value="00:00" class="form-control">
            </div>
        </div>
        <div class="col-md-2 mx-auto mt-3">
            <label name="time_end" for="time_end" class="form-control">Créneau fin</label>
            <div class="form-group">
                <input id="time_end" type="text" value="00:00" class="form-control ">
            </div>
        </div>
        <div class="col-md-4 mx-auto mt-3">
            <label name="enfant_resa" for="enfant_resa" class="form-control">Enfant</label>
            <div class="form-group">
                <select name="enfant_resa" id="enfant_resa" class="form-control">
                    <option value="1">Michel</option>
                    <option value="2">Kevin</option>
                    <option value="3">Clitorine</option>
                    <option value="4">Robert</option>
                </select>
                <span class="input-highlight"></span>
            </div>
        </div>
    </div>

    <div class="col-md-5 mx-auto mt-5">
        <input type="submit" name="submitted" class="btn btn-lg btn-success btn-block">
    </div>
</form>

<script>
    $('#time_debut').timepicker({
        header: false,
        footer: false,
        mode: '24hr',
        modal: false,
        uiLibrary: 'bootstrap4',
    });
    $('#time_end').timepicker({
        header: false,
        footer: false,
        mode: '24hr',
        modal: false,
        uiLibrary: 'bootstrap4',
    });
    $('#date_resa').datepicker({
        calendarWeeks: false,
        uiLibrary: 'bootstrap4',
        disableDaysOfWeek: [0],
        format: 'dd/mm/yyyy',
        header : true,
        showOtherMonths: true,
        selectOtherMonths: false,
        weekStartDay: 1,
    });
</script>