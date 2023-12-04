<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            float: left;
        }
        input, select{
            padding: 3px;
            outline: none;
        }
        button{
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>***Input data Penggajian***</h1>
    <h5> =======================================================</h5>
    <table>
            <form action="output.php" method="post">
            <tr>
                <th>
                    <label for="nip"> NIP</label>
                </th>
                <td>
                   : <input type="text" id="nip" name="nip">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="nama"> Nama Pegawai</label>
                </th>
                <td>
                   : <input type="text" id="nama" name="nama">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="jabatan"> Jabatan</label>
                </th>
                <td>
                   : <select name="jabatan" id="jabatan">
                        <option value="manager">Manager</option>
                        <option value="sekretaris">Sekretaris</option>
                        <option value="staf">Staf</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th rowspan="2">
                    <label for="status"> Status</label>
                </th>
                <td>
                  :  <input type="radio" id="status" name="status" value="menikah"> Menikah
                </td>
            </tr>
            <tr>
                <td>
                   &nbsp;  <input type="radio" id="status" name="status" value="Belum menikah"> Belum Menikah
                </td>
            </tr>
            <tr>
                <th>
                    <button type="submit">Proses</button>
                    <button type="reset">Batal</button>
                </th>
            </tr>
        </table>
    </form>
</body>
</html>