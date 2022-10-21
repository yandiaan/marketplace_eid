<section class="section">
    <select name="provinsi" id="provinsi" class="form-control">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="8">8</option>
    </select>

    <select name="kota" id="kota" class="form-control"></select>
</section>

<script>
    $(document).ready(function() {
        $('#provinsi').change(function() {
            var id = $(this).val();
            $.ajax({
                url : `http://localhost:8888/suplier/dashboard/get_kota`,
                method : 'POST',
                data : { id_provinsi: id },
                dataType: 'json',
            }).done((res) => {
                $('#kota').find('option').remove();
                $.each(res, function(key, value) {
                    $('#kota').append(
                        `<option value="${value.city_id}">${value.city_name}</option>`
                    );
                });                
            }).fail((res, status, err) => {
                console.log(err);
            });
        });

    });
</script>