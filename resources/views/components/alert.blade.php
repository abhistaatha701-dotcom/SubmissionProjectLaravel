@props(['tipe' => 'info'])

<div style="padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; 
    @if($tipe == 'bahaya') background-color: #ffdddd; color: red;
    @elseif($tipe == 'sukses') background-color: #ddffdd; color: green;
    @else background-color: #e2e3e5; color: #383d41; @endif">
    {{ $slot }}
</div>