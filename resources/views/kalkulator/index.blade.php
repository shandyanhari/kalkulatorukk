<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: darkred;
        }

        table {
            border: 1px solid white;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            background-color: darkcyan;
            outline: 1px solid black;
        }

        input[type="submit"] {
            width: 100%;
            padding: 25px 40px;
            font-size: large;
            background-color: darkgreen;
            color: black;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            outline-color: white;
            border: 1px solid gray;
        }

        input[type="submit"]:hover {
            background-color: darkblue;
        }

        input [type="number"] {
            width: 200%;
            padding: 30px;
            font-size: 24px;
            font-weight: bold;
            border: 1px solid black;
            border-radius: 5px;
            border: 1px solid black;
            align-items: center;


        }

        input[type="Reset"] {
            font-style: unset;
            font-size: larger;
            width: 100%;
            padding: 20px 40px;
            background-color: gold;
            color: black;
            font-weight: bold;
            margin-bottom: 5px;
            border: 1px solid gray;
            border-radius: 5px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
        }

        input[type="Reset"]:hover {
            background-color: tomato;
        }
    </style>
</head>

<body>
    <center>
        <form action="{{ route('proses.store')}}" method="post">
            @csrf
            <table border=1 width=450 height=450>
                <tr>
                    <td colspan="4">
                        <h1>
                            <center>KALKULATOR UKK</center>
                        </h1>
                    </td>
                </tr>

                <tr>
                    <td colspan=2><input type="number" name="a" id""></td>

                    <td colspan=2 rowspan=2>
                        <center><input type="reset" value="reset" name="op"></center>
                    </td>
                </tr>

                <tr>
                    <td colspan="2"><input type="number" name="b" id""></td>
                </tr>

                <tr>
                    <td colspan="4">HASIL : </td>
                </tr>

                <tr>
                    <td>
                        <center><input type="submit" value="+" name="op"></center>
                    </td>

                    <td>
                        <center><input type="submit" value="-" name="op"></center>
                    </td>

                    <td>
                        <center><input type="submit" value="X" name="op"></center>
                    </td>

                    <td>
                        <center><input type="submit" value="/" name="op"></center>
                    </td>
                </tr>

                <tr>
                    <td colspan="4">
                        Nama : Shandy Anhari<br>
                        Kelas : XII PPLG 2
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>