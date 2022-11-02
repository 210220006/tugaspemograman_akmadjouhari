<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="EI-Edge">
    <title> HALAMAN PENJUALAN BARANG</title>
    </head>
    <body>
        <table border="0" width="100%">
            <tr>
                <th colspan="3" align="left">HALAMAN DATA PENJUALAN BARANG</th>
            </tr>
            <tr>
                <td align="left" width="100px">
                    <form action="">
                        <label for="">No Transaksi</label>
                </td>
                <td><input type="text" name="input_transaksi" id=""></td>
                <td width="600px">FOTO PRODUK</td>
            </tr>
            <tr>
                <td align="left" width="100px">
                    <label width="100px" for="">TANGGAL</label>
                </td>
                <td><input type="date" name="txt_tanggal" id=""></td>
                <td rowspan="5" width="700"><image src="" width="275" height="155"></image></td>
            </tr>
            <tr>
                <td align="left" width="100px">
                    <label width="100px" for="">KODE BARANG</label>
                </td>
                 </td>
                <input type="text" name="txt_kode_barang" id="">
                <label for="">HARGA BARANG</label>
                <input typr="number" name="number_harga_rp" id="">
                </td>
            </tr>
            <tr>
                <td align="left" width="100px" heigt="100px">
                <label for="">NAMA BARANG</label>
                </td>
                <input type="text" name="'txt_nama_barang" id="">
                </td>
            </tr>
            <tr><td colspan="1"><hr align="left" width="100%"></td></tr>
            <tr>
                <td align="left" width="100px" height="100px">
                <label for="">JUMLAH BELI</label>
                </td>
                <td>
                <input type="nember" name="number_jumlah_beli" id="">
                <label for="">SUB TOTAL</label>
                <input typr="number" name="number_sub_total" id="">
                </td>
            </tr>
            <tr><td colspan="3"><hr align="left" width="70%"> </td></tr>
            <tr>
                <td><button type="submit">SIMPAN</button></td>
                <td><button type="reset">RESET</button></td>
            </tr>
                </table>
                <br>
                <table border="1" width="70%">
            <tr>
                <th style="background-color:dimgray; color:white; width:10px;">NO</th>
                <th style="background-color:dimgray; color:white; width:10px;">KODE</th>
                <th style="background-color:dimgray; color:white; width:10px;">NAMA BARANG</th>
                <th style="background-color:dimgray; color:white; width:10px;">HARGA RP</th>
                <th style="background-color:dimgray; color:white; width:10px;">JUMLAH BELI</th>
                <th style="background-color:dimgray; color:white; width:10px;">SUB TOTAL RP</th>
            </tr>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
                </table>
                <br>
                <table border="0" width="70%">
            <tr>
                    <td colspan="2" align="left">
                        <label for="">KASIR</label>
                        </td>
                <td>
                <td align="right">
                    <label for="">TOTAL HARGA</label>
                </td>
                <td>
                <input type="number" name="number_total_harga" id="">
                </td>
            </tr>
            <tr>
            <td colspan="4" align="right">
                <label for="">TOTAL DISKON</label>
            </td>
            <td>
            <input type="number" name="number_total_diskon" id="">
            </td>
        </tr>
        <tr>
            <td colspan="4" align="rigth">
                <label for="">TOTAL BAYAR</label>
            </td>
            <td>
                <input type="number" name="number_total_bayar" id="">
            </td>
        </tr>
        </table>
    </body>
</html>