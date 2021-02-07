<div class="box-body">
    <table id="{{$tableId ?? 'datatable'}}" class="table table-bordered table-hover dataTable dtr-inline" role="grid">
        <thead>
            <tr role="row" id="{{$tableHeadId ?? ''}}">
                @foreach($tableColumns ?? [["name" => 'Default Column']] as $column)
                    <th id="{{$column["id"] ?? ''}}" class="{{$column["class"] ?? ''}} sorting text-center">
                        {{$column["name"] ?? ''}}
                    </th>
                @endforeach
                @if($haveButton ?? false)
                    @include('datatable._datatableButton.datatableColumnButton',["datatableButtons" => $datatableButton ?? [], "tableId" => $tableId ?? ''])
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($tableRows ?? [] as $row)
            <tr id="{{$row["id"] ?? ''}}" class="{{$row["class"] ?? ''}}">
                @foreach($row["data"] ?? [] as $cell)
                    <td role="row" id="{{$cell["id"] ?? ''}}"
                        class="{{$cell["class"] ?? ''}} text-center">
                        {{$cell["text"] ?? ''}}
                    </td>
                @endforeach
                @if($haveButton ?? false)
                    @include('datatable._datatableButton.datatableButton',["datatableButtons" => $datatableButton ?? [], "rowId" => $row["id"] ?? ''])
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
