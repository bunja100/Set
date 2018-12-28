<div class="card">
  <h1>Birth Certificate Card</h2>
  <h2>
    <small>First Name :</small>
    {{ $patient->first_name }}
    <small>Last Name :</small>
    {{ $patient->last_name }}
    <br>
      <small> Sex :</small>
    {{ $patient->sex }}
      <small>Date of Birth :</small>
    {{ $patient->date_of_birth }}
    <br>
      <small>immunisation :</small>
    {{ $patient->immunisation }}
      <small>Record of immunisation :</small>
    {{ $patient->rec_of_imm }}
<br>
      <small>Fathers name :</small>
    {{$father->fathers_name}}
    <small>Occupation of Father :</small>
    {{$father->Occupation_of_father}}
    <br>
    <small>address of father :</small>
    {{$father->address_of_father}}

    <small>mothers name :</small>
    {{$mother->mothers_name}}
    <br>
    <small>Occupation of mother :</small>
    {{$mother->Occupation_of_mother}}
    <small>address of mother:</small>
    {{$mother->address_of_mother}}

  </h2>

</div>
<style media="screen">
  .card{
    width: 80%;
    margin: auto;
    padding: 25px;
    border: 1px solid #555;
    border-radius: 15px;
    background-image: url('{{ asset('') }}');
  }
  small{
    color: #555;
  }
</style>
