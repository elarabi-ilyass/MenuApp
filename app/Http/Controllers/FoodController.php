<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\SnackPlat;
use App\Models\LayoutInfo;
use App\Models\PetitDéjeuné;
use Illuminate\Http\Request;
use App\Models\JusBoissonEtFroid;
use App\Models\CrépeEtViennoiserie;

class FoodController extends Controller
{

    public function homePage(){
        $homeInfos=Home::all();
        return view('home',compact('homeInfos'));
    }

    public function les_petits_déjeunersPage(){
        $petitDéjeunés=PetitDéjeuné::all();
        $layoutInfo = LayoutInfo::first();
        return view('les_petits_déjeuners',compact('petitDéjeunés','layoutInfo'));
    }

    public function les_snacks_et_les_plats(){
        $snackPlats=SnackPlat::all();
        $layoutInfo = LayoutInfo::first();
        return view('les_snacks_et_les_plats',compact('snackPlats','layoutInfo'));
    }


    public function les_jus_et_les_boissons_et_froides(){
        $jusBoissonEtFroids=JusBoissonEtFroid::all();
        $layoutInfo = LayoutInfo::first();
        return view('les_jus_et_les_boissons_et_froides',compact('jusBoissonEtFroids','layoutInfo'));
    }

    public function les_crépes_et_les_viennoiseries(){
        $crépesEtViennoseries=CrépeEtViennoiserie::all();
        $layoutInfo = LayoutInfo::first();
        return view('les_crépes_et_les_viennoiseries',compact('crépesEtViennoseries','layoutInfo'));
    }
}
