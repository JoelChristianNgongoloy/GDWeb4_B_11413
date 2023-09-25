<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />  
        <title>GD 4 Halaman 1 - 210711413</title>
        <style>
            img {
                border-radius: 50%;
                width: 150px;
            }

            legend {
                font-size: 30px;
                font-family: Arial, Helvetica, sans-serif;
            }

            td,th {
                padding: 5px;
                border: 1px solid;
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>
        <fieldset>
            <legend>CONTACT</legend>
            <ul style="list-style-type: square;">
                <li><a href="{{ url('halaman1') }}">Page 1</a></li>
                <li><a href="{{ url('halaman2') }}">Page 2</a></li>
            </ul>
            <hr style="border: dotted">

            <table style="width: auto;" >
                
                <tr>
                    <th colspan="5"> List Kontak Orang Penting</th>
                </tr>

                <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th>Nama</th>
                    <th>Telp</th>
                    <th>Domisili</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td> <img src="{{ asset('images/Picture1.jpg') }}" alt="BER-REHAN"></td>
                    <td> Joel</td>
                    <td> 0869696969</td>
                    <td> JAKAL KM 5</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td> <img src="{{ asset('images/Picture1.jpg') }}" alt="BER-REHAN"></td>
                    <td> Rehan</td>
                    <td> 08464646</td>
                    <td> YADARA</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td> <img src="{{ asset('images/Picture1.jpg') }}" alt="BER-REHAN"></td>
                    <td> Aji</td>
                    <td> 086946694669</td>
                    <td> Bantul</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td> <img src="{{ asset('images/Picture1.jpg') }}" alt="BER-REHAN"></td>
                    <td> Bernard</td>
                    <td> 086946694669</td>
                    <td> Kalasan</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td> <img src="{{ asset('images/Picture1.jpg') }}" alt="BER-REHAN"></td>
                    <td> Yessa</td>
                    <td> 086946694669</td>
                    <td> Kledokan</td>
                </tr>
            </table>
        </fieldset>
    </body>
</html>