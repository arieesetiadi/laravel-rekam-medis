@php
    use App\Constants\StatusBerkas;
@endphp

<table class="table">
    <thead>
        <tr>
            <th class="text-center">
                <span class="text-dark whitespace-nowrap">No RM</span>
            </th>
            <th class="text-center">
                <span class="text-dark whitespace-nowrap">Nama Pasien</span>
            </th>
            <th class="text-center">
                <span class="text-dark whitespace-nowrap">Nama Peminjam</span>
            </th>
            <th class="text-center">
                <span class="text-dark whitespace-nowrap">Ruangan</span>
            </th>
            <th class="text-center">
                <span class="text-dark whitespace-nowrap">No Telp Ruangan</span>
            </th>
            <th class="text-center">
                <span class="text-dark whitespace-nowrap">Tujuan Peminjaman</span>
            </th>
            <th class="text-center">
                <span class="text-dark whitespace-nowrap">Tgl Peminjaman</span>
            </th>
            <th class="text-center">
                <span class="text-dark whitespace-nowrap">Status Berkas</span>
            </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <form>
                <td style="min-width: 150px;">
                    <input class="form-control form-control-sm" type="text">
                </td>

                <td style="min-width: 150px;">
                    <input class="form-control form-control-sm" type="text">
                </td>

                <td style="min-width: 150px;">
                    <input class="form-control form-control-sm" type="text">
                </td>

                <td style="min-width: 150px;">
                    <input class="form-control form-control-sm" type="text">
                </td>

                <td style="min-width: 150px;">
                    <input class="form-control form-control-sm" type="text">
                </td>

                <td style="min-width: 150px;">
                    <input class="form-control form-control-sm" type="text">
                </td>

                <td style="min-width: 150px;">
                    <input class="form-control form-control-sm" type="date">
                </td>

                <td style="min-width: 200px;">
                    <select id="gender" class="form-select form-select-sm" name="jns_kel" aria-disabled="true">
                        <option selected disabled>Status Berkas</option>

                        @foreach (StatusBerkas::values() as $status)
                            <option value="{{ $status }}">{{ $status }}</option>
                        @endforeach
                    </select>
                </td>

                <td style="min-width: 200px;" class="border-bottom-0">
                    <button class="btn btn-primary">
                        @if (false)
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        @endif

                        Simpan
                    </button>
                </td>
            </form>
        </tr>

        @foreach (range(1, 10) as $item)
            <tr>
                <td class="text-center">{{ $item }}</td>
                <td class="text-center">{{ $item }}</td>
                <td class="text-center">{{ $item }}</td>
                <td class="text-center">{{ $item }}</td>
                <td class="text-center">{{ $item }}</td>
                <td class="text-center">{{ $item }}</td>
                <td class="text-center">{{ $item }}</td>
                <td class="text-center">{{ $item }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
