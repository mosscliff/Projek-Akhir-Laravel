<x-app-layout>
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Daftar Hewan
            </div>
            <div class="card-body">
                <table  class="table table-primary table-striped">
                    <tr class="table-primary">
                        <th>Ikan</th>
                        <th>Mamalia</th>
                        <th>Reptil</th>
                        <th>Unggas</th>
                        <th>Amfibi</th>
                        <th colspan=2>Action</th>
                    </tr>
                    @foreach($data as $isi)
                    <tr class="table-dark" style="width: 10%">
                        <td class="table-info">
                            {{ $isi -> Ikan }}
                        </td>
                        <td class="table-info" style="width: 20%">
                            {{ $isi -> Mamalia }}
                        </td>
                        <td class="table-info" style="width: 5%">
                            {{ $isi -> Reptil }}
                        </td>
                        <td class="table-info" style="width: 25%">
                            {{ $isi -> Unggas }}
                        </td>
                        <td class="table-info" style="width: 10%">
                            {{ $isi -> Amfibi }}
                        </td>
                        <td class="table-info" style="width: 5%">
                            <a href="{{ url('delete-hewan')}}/{{ $isi->nim }}">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </a>
                        </td>
                        <td class="table-info" style="width: 5%">
                            <a href="{{url('edit-hewan')}}/{{$isi->nim}}">
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </table>
</x-app-layout>
