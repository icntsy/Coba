@section('meta_title', 'MEDICAL RECORD')
@section('page_title', 'PROCESS  PENYIAPAN OBAT')
@section('page_title_icon')
<i class="metismenu-icon fa fa-list"></i>
@endsection

<div class="row">
    <form action="{{ url('/antri/obat/process/'.$queue->id) }}" method="POST">
        @csrf
        <div class="card col-md-12">
            <div class="card-header">
                <div class="btn-actions-pane-right text-capitalize">
                    <button  class="btn-wide btn-outline-2x mr-md-2 btn btn-primary"><i class="fa
                        fa-check"></i> Selesai
                    </button>
                </div>
            </div>
            <div class="card-body row">
                <div class="col-md-12">
                    <div class="main-card">
                        <div class="card-header">
                            Data Pasien
                        </div>
                        <div class="card-body row">
                            <div class="col-md-6">
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                            <td style="font-weight: bold;" width="35%">NIK</td>
                                            <td width="1%">:</td>
                                            <td>
                                                {{$queue->patient->nik}}
                                            </td>
                                        </tr>

                                        <tr>
                                        <td style="font-weight: bold;" width="35%">Nama Lengkap</td>
                                        <td width="1%">:</td>
                                        <td>
                                            {{$queue->patient->name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;" width="35%">Sex / Umur</td>
                                        <td>:</td>
                                        <td>{{$queue->patient->gender}} / {{\Carbon\Carbon::parse($queue->patient->birth_date)
                                            ->diffInYears
                                            ()}}
                                            Thn</td>
                                        </tr>
                                    <tr>
                                        <td style="font-weight: bold;" width="35%">Alamat</td>
                                        <td width="1%">:</td>
                                        <td>
                                            {{$queue->patient->address}}
                                        </td>
                                    </tr>



                                    {{-- <tr>
                                        <td style="font-weight: bold;" width="35%">Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>{{\Carbon\Carbon::parse($queue->patient->birth_date)->isoFormat('D MMMM Y')}}</td>
                                    </tr> --}}


                                    </tbody></table>
                                </div>
                                <div class="col-md-6">
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="font-weight: bold;" width="35%">Tanggal Masuk/Jam</td>
                                                <td width="1%">:</td>
                                                <td>{{\Carbon\Carbon::parse($queue->created_at)->format('H:i, d F Y')}}</td>
                                                {{-- <td>{{\Carbon\Carbon::parse($queue->created_at)->isoFormat('hh:mm, D MMMM Y')}}</td> --}}
                                            </tr>
                                            <tr>
                                                <td style="font-weight: bold;" width="35%">No. Rekam Medis</td>
                                                <td width="1%">:</td>
                                                <td>
                                                    001
                                                </td>
                                            </tr>


                                        {{-- <tr>
                                            <td style="font-weight: bold;" width="35%">No Antrian</td>
                                            <td>:</td>
                                            <td>{{$queue->queue_number}}</td>
                                        </tr> --}}
                                        {{-- <tr>
                                            <td style="font-weight: bold;" width="35%">Jenis Pasien</td>
                                            <td>:</td>
                                            <td>Umum </td>
                                        </tr> --}}



                                        <tr>
                                            <td style="font-weight: bold;" width="35%">Dokter Pemeriksa</td>
                                            <td>:</td>
                                            <td>{{$queue->doctor->name}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;" width="35%">Layanan </td>
                                            <td>:</td>
                                            <td>{{$queue->service->name}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <!-- {{-- <th>Harga Satuan</th> --}} -->
                                            <th>Qty</th>
                                            <th>Aturan Pakai</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $subtotal = 0;
                                        @endphp
                                        @foreach($queue->medicalrecord->drugs as $drug)
                                        @php
                                        $subtotal += $drug->harga * $drug->pivot->quantity;
                                        @endphp
                                        <tr>
                                            <td>{{$drug->id}}</td>
                                            <td>{{$drug->nama}}</td>
                                            <!-- {{-- <td>{{$drug->harga}}</td> --}} -->
                                            <td>{{$drug->pivot->quantity}}</td>
                                            <td>{{$drug->pivot->instruction}}</td>
                                            {{-- <td>{{  $subtotal += $drug->harga * $drug->pivot->quantity }}</td> --}}
                                            <td>Rp. {{ number_format($drug->harga * $drug->pivot->quantity) }}</td>
                                            {{-- <td>{{(int)($listDrug[$index]["quantity"]) * $drug["drug"]["harga"] }}</td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- Subtotal : <input type="text" name="payment" placeholder="payment" class="form-control"  id='payment' style="width: 50%" value="{{ number_format($subtotal + $queue->doctor->harga_jasa) }}" readonly> --}}
                                Subtotal : <input type="text" name="payment" placeholder="payment" class="form-control"  id='payment' style="width: 50%" value="{{ $subtotal + $queue->doctor->harga_jasa }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
