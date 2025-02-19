<?php

namespace App\Http\Controllers;

use App\Http\Requests\iletisimRequest;
use Illuminate\Http\Request;
use App\Models\iletisim;

class iletisimController extends Controller
{


    public function iletisimkaydet(iletisimRequest $request)
    {


        $data=$request->all();
        $data["ip"]=$request->ip();


        // Form verilerini doğrulama



        $sonkaydedilen=iletisim::create($data);

        // Veriyi veritabanına kaydetme


        // Başarı mesajı veya yönlendirme
        return 'Mesajınız başarıyla gönderildi!';
    }
}
