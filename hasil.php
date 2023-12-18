<?php 
    require_once 'form_atm.php';

    $ab1 = new Nomor ("010");
    $ab1_c = new Customer ("Messi");
    $ab1_s = new Saldo (6250000);
    $ab2 = new Nomor ("070");
    $ab2_c = new Customer ("Ronaldo");
    $ab2_s = new Saldo (8743500);
    $ab3 = new Nomor ($_POST["nomer"]);
    $ab3_c = new Customer ($_POST["customer"]);
    $ab3_s = new Saldo ($_POST["saldo"]);
    // $ab3 = new AccountBank ($_POST["no"],$_POST["cust"],$_POST["saldo"]);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<table class="table caption-top">
  <thead>
    <tr >
      <th scope="col" style="background-color: #122932; color: white;">No</th>
      <th scope="col" style="background-color: #122932; color: white;">No.Rekening</th>
      <th scope="col" style="background-color: #122932; color: white;">Customer</th>
      <th scope="col" style="background-color: #122932; color: white;">Saldo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="background-color: #CAC4CE; color: black;">1</th>
      <td style="background-color: #CAC4CE; color: black;"><?php $ab1->nomer(); ?></td>
      <td style="background-color: #CAC4CE; color: black;"><?php $ab1_c->customer(); ?></td>
      <td style="background-color: #CAC4CE; color: black;"><?php $ab1_s->saldo(); ?></td>
    </tr>
    <tr>
      <th scope="row" >2</th>
      <td><?php $ab2->nomer(); ?></td>
      <td><?php $ab2_c->customer(); ?></td>
      <td><?php $ab2_s->saldo(); ?></td>
    </tr>
    <tr>
      <th scope="row" style="background-color: #CAC4CE; color: black;">3</th>
      <td style="background-color: #CAC4CE; color: black;"><?php $ab3->nomer(); ?></td>
      <td style="background-color: #CAC4CE; color: black;"><?php $ab3_c->customer(); ?></td>
      <td style="background-color: #CAC4CE; color: black;"><?php $ab3_s->saldo(); ?></td>
    </tr>

    <style>
      td {
        text-align: auto;
      }
    </style>
  </tbody>
</table>
