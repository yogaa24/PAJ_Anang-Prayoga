<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Location</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <h2>Select Location</h2>
    <label for="provinsi">Provinsi:</label>
    <select id="provinsi" class="provinsi" style="width: 200px;">
        <option value="">Pilih Provinsi</option>
        @foreach($provinsi as $prov)
            <option value="{{ $prov['id'] }}">{{ $prov['nama'] }}</option>
        @endforeach
    </select>
    <label for="kabupaten">Kabupaten:</label>
    <select id="kabupaten" class="kabupaten" style="width: 200px;"></select>
    <label for="kecamatan">Kecamatan:</label>
    <select id="kecamatan" class="kecamatan" style="width: 200px;"></select>
    <label for="kelurahan">Kelurahan:</label>
    <select id="kelurahan" class="kelurahan" style="width: 200px;"></select>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.provinsi').select2();
            $('#kabupaten').select2();
            $('#kecamatan').select2();
            $('#kelurahan').select2();

            $('#provinsi').change(function(){
                var idProvinsi = $(this).val();
                if(idProvinsi) {
                    $.ajax({
                        url: '/location/kabupaten/'+idProvinsi,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            $('#kabupaten').empty();
                            $('#kabupaten').append('<option value="">Pilih Kabupaten</option>');
                            $.each(data, function(key, value) {
                                $('#kabupaten').append('<option value="'+ value['id'] +'">'+ value['nama'] +'</option>');
                            });
                        }
                    });
                }
            });

            $('#kabupaten').change(function(){
                var idKabupaten = $(this).val();
                if(idKabupaten) {
                    $.ajax({
                        url: '/location/kecamatan/'+idKabupaten,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            $('#kecamatan').empty();
                            $('#kecamatan').append('<option value="">Pilih Kecamatan</option>');
                            $.each(data, function(key, value) {
                                $('#kecamatan').append('<option value="'+ value['id'] +'">'+ value['nama'] +'</option>');
                            });
                        }
                    });
                }
            });

            $('#kecamatan').change(function(){
                var idKecamatan = $(this).val();
                if(idKecamatan) {
                    $.ajax({
                        url: '/location/kelurahan/'+idKecamatan,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            $('#kelurahan').empty();
                            $('#kelurahan').append('<option value="">Pilih Kelurahan</option>');
                            $.each(data, function(key, value) {
                                $('#kelurahan').append('<option value="'+ value['id'] +'">'+ value['nama'] +'</option>');
                            });
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
