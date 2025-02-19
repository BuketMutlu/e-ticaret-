<!DOCTYPE html>
<html>
<head>
    <title>Ödeme Başarılı</title>
</head>
<body>
    <h1>{{ $message }}</h1>
    <p>Sipariş Detayları:</p>
    <p>Sipariş ID: {{ $order->id }}</p>
    <p>Toplam Tutar: {{ $order->total_amount }} TL</p>
    <!-- Diğer sipariş detayları -->
</body>
</html>
