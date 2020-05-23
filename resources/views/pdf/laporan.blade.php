<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   
    <title>Laporan pembayaran SPP</title>

</head>
<body>

   <style>
      .page-break{
         page-break-after:always;
       }
      .text-center{
         text-align:center;
       }
      .size2 {
         font-size:1.4rem;
      }
      .border-bottom {
         border-bottom:1px black solid;
      }
      .border {
         border: 2px block solid;
      }
      .border-top {
         border-top:1px black solid;
      }
      .float-right {
         float:right;
      }
      .mt-4 {
         margin-top:4px;
       }
      .mx-1 {
         margin:1rem 0 1rem 0;
      }
      .mr-1 {
         margin-right:1rem;
      }
      .mt-1 {
         margin-top:1rem;
      }
      ml-2 {
         margin-left:2rem;
      }
      .ml-min-5 {
         margin-left:-5px;
      }
      .text-uppercase {
         font:uppercase;
      }
      .d1 {
         font-size:2rem;
      }
      .img {
         position:absolute;
      }
      .link {
         font-style:underline;
      }
      .text-bold {
         font-style:bold;
      }
      .underline {
         text-decoration:underline;
      }
      
      table {
         font-family: Arial, Helvetica, sans-serif;
         color: #666;
         text-shadow: 1px 1px 0px #fff;
         background: #eaebec;
         border: #ccc 1px solid;
      }
      table th {
           padding: 10px 15px;
           border-left:1px solid #e0e0e0;
           border-bottom: 1px solid #e0e0e0;
           background: #ededed;
       }  
       table tr {
           text-align: center;
            padding-left: 20px;
       }
       table td {
             padding: 10px 15px;
             border-top: 1px solid #ffffff;
             border-bottom: 1px solid #e0e0e0;
             border-left: 1px solid #e0e0e0;
             background: #fafafa;
             background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
             background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
      }
      .table-center {
         margin-left:auto;
         margin-right:auto;
      }
      .mb-1 {
         margin-bottom:1rem;
      }
   </style>

   <div class="size2 text-center mb-1">LAPORAN PEMBAYARAN SPP<br>SMK BINA INFORMATIKA</div>
   
  <table class="table-center mb-1">
      <thead>
         <tr>
            <th>Petugas</th>
            <th>Siswa</th>
            <th>Kelas</th>
            <th>SPP Bulan</th>
            <th>SPP Nominal</th>
            <th>Nominal Bayar</th>
            <th>Tanggal Bayar</th>
         </tr>
      </thead>
      <tbody>
         @foreach($pembayaran as $val)
         <tr>
            <td>{{ $val->users->name }}</td>
            <td>{{ $val->siswa->nama }}</td>
            <td>{{ $val->siswa->kelas->nama_kelas }}</td>
            <td>{{ $val->spp_bulan }}</td>
            <td>{{ $val->siswa->spp->nominal }}</td>
            <td>{{ $val->jumlah_bayar }}</td>
            <td>{{ $val->created_at->format('d M, Y') }}</td>
         
         </tr>
         @endforeach
      </tbody>


</table>
   <!-- /content -->
   
   <!-- footer -->
    <div>Pembuat : {{ auth()->user()->name }}</div>
   <!-- /footer -->
</body>
</html>