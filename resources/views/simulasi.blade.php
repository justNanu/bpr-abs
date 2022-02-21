@extends('layout')
@section('content')
<div class="container my-5 py-5">
    <h2 class="mt-5 font-weight-bold pb-3">Simulasi Kredit</h2>

    <div class="row">
        <div class="col col-lg-6">
            <form>
                <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Pilih Jenis Kredit</label>
                    <select class="custom-select mr-sm-2 kredit" id="language" onChange='choose()'>
                        <option disabled selected value="0">Jenis Kredit...</option>
                        <option value="1">Modal Kerja</option>
                        <option value="2">Konsumtif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="plafond">Plafond Kredit</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="number" class="form-control" id="plafond" placeholder="Nominal" required>
                    </div>
                </div>
                <div class="form-group waktu">

                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    onClick="rincianAngsuran()">
                    Kalkulasi
                </button>
            </form>

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content p-4" id="tableAngsuran">

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('js/index.js')}}"></script>

@endsection