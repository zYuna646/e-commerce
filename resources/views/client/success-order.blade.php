<x-template.layout title="{{ $title }}" >
  <x-organisms.navbar :path="$shop->path"/>
    <div class="container py-y d-flex flex-column align-items-center gap-3">
      <img src="{{ asset('client/img/success-order.png') }}" class="border rounded rounded-3" style="width:40%;height:auto;">
      <div class="text-center">
        <h4>Terima Kasih Sudah Melakukan Order</h4>
        <p>Order Code : <u><b class="text-danger">{{ $order_code }}</b></u></p>
        <p>Kamu Dapat Selalu Mengecek Order Pada <a href="{{ route('clientCheckOrder') }}"><u>Perika Pesanan</u></a>, Mohon Selalu Pantau</p>
      </div>
      <a href="{{ route('clientCheckOrder') }}" class="btn btn-primary">Perika Pesana Sekarang</a>
    </div>
  <x-organisms.footer :shop="$shop"/>
</x-template.layout>