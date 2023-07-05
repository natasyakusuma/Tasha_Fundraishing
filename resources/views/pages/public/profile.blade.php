@extends('layouts.app2')

@section('title')
Profil
@endsection


@section('content')
<div class="profile-page">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold"> Thea </span><span class="text-black-50">thea@gmail.com</span><span>
                    </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Data Diri </h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels"> Nama Lengkap </label><input type="text"
                                class="form-control" placeholder="first name" value=""></div>
                        <div class="col-md-6"><label class="labels"> Email </label><input type="text"
                                class="form-control" value="" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Nomor Telepon</label><input type="text"
                                class="form-control" placeholder="enter phone number" value=""></div>
                        <div class="col-md-12"><label class="labels"> NIK </label><input type="text"
                                class="form-control" placeholder="enter address line 1" value=""></div>
                        <div class="col-md-12"><label class="labels"> Tanggal Lahir</label><input type="text"
                                class="form-control" placeholder="enter address line 2" value=""></div>
                        <div class="col-md-12"><label class="labels"> Gender </label><input type="text"
                                class="form-control" placeholder="enter address line 2" value=""></div>
                        <div class="col-md-12"><label class="labels"> Status Pekerjaan </label><input type="text"
                                class="form-control" placeholder="enter address line 2" value=""></div>
                        <div class="col-md-12"><label class="labels">NPWP </label><input type="text" class="form-control"
                                placeholder="enter address line 2" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                class="form-control" placeholder="country" value=""></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text"
                                class="form-control" value="" placeholder="state"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save
                            Profile</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                            Experience</span><span class="border px-3 p-1 add-experience"><i
                                class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text"
                            class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text"
                            class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

