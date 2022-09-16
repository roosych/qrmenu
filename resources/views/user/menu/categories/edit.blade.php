@extends('layouts.dashboard')

@section('title', 'Категория')

@section('content')

    <div class="col-lg-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col pe-md-32">
                        <h4>Категория: {{$category->name}}</h4>

                        <p class="hp-p1-body"></p>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <form class="mt-8 mb-24">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-10">
                                            <input name="name" type="text" class="form-control" value="{{$category->name}}" placeholder="Название категории">
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-primary">Сохранить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                @if($category->products->count() > 0)
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse-products" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Показать все позиции ({{$category->products->count()}})
                </a>

                <div class="collapse" id="collapse-products">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 mt-24">
                            <thead>
                            <tr>
                                <th></th>
                                <th>
                                    <span class="hp-badge-size d-block pb-16 fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">
                                        Название
                                    </span>
                                </th>
                                <th>
                                    <span class="hp-badge-size d-block pb-16 fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">
                                        Цена
                                    </span>
                                </th>
                                <th>
                                    <span class="hp-badge-size d-block pb-16 fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">
                                        Статус
                                    </span>
                                </th>
                                <th class="text-center">
                                    <span class="hp-badge-size d-block pb-16 fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">
                                        Действия
                                    </span>
                                </th>
                            </tr>
                            </thead>

                            <tbody id="sortable">
                            @foreach ($products as $product)
                                @php
                                    $checked = $product->active ? 'checked' : '';
                                @endphp

                                <tr class="srow" id="row_{{$product->id}}" data-id="{{$product->id}}">
                                    <td width="10">
                                        <span><i class="hp-cursor-pointer ri-2x ri-more-2-fill text-black-80" style="font-size: 18px;"></i></span>
                                    </td>
                                    <td>
                                        <span class="mb-0 text-black-80 hp-text-color-dark-30">{{$product->name}}</span>
                                    </td>
                                    <td>
                                        <span class="mb-0 text-black-80 hp-text-color-dark-30">
                                            {{$product->price}} ₼
                                        </span>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" {{$checked}} name="active" data-id="{{$product->id}}" id="{{$product->id}}">
                                            <label class="form-check-label" for="{{$product->id}}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="button-group text-center">
                                            <a href="#">
                                                <i class="iconly-Curved-EditSquare hp-cursor-pointer hp-transition hp-hover-text-color-warning-1 text-black-80" style="font-size: 24px;"></i>
                                            </a>
                                            <a href="#" class="deleteBtn" data-id="{{$product->id}}">
                                                <i class="iconly-Curved-Delete hp-cursor-pointer hp-transition hp-hover-text-color-danger-1 text-black-80" style="font-size: 24px;"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>


    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Удалить категорию?</h4>
                </div>
                <div class="modal-footer">
                    <button id="okBtn" type="button" class="btn btn-primary">Да</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('css')
    <link href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
@endpush

@push('js')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $( document ).ready(function() {
            $( function() {
                $( "#sortable" ).sortable({
                    items: 'tr',
                    cursor: 'move',
                    update: function() {
                        sortUpdate();
                    }
                });
            });

            function sortUpdate() {
                let order = [];
                let token = $('meta[name="csrf-token"]').attr('content');
                $('.srow').each(function(index) {
                    order.push({
                        id: $(this).attr('data-id'),
                        position: index +1
                    });
                });

                $.post('{{route('product.sortable')}}', {order: order, _token: token});
            }
        });
        $(".form-check-input").change(function() {
            let token = $('meta[name="csrf-token"]').attr('content');
            let active;
            this.checked ? active = 1 : active = 0;

            $.post('{{route('product.setStatus')}}', {id: this.id, active: active, _token: token});
        });

        $('.deleteBtn').on('click', function (e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            let token = $('meta[name="csrf-token"]').attr('content');
            $('#deleteModal').modal('show');

            $('#okBtn').click('click', function () {
                $.ajax({
                    url: '{{route('product.delete')}}',
                    type: 'POST',
                    data: {
                        id: id,
                        _token: token,
                    },
                    success: function (response) {
                        if (response === 'success') {
                            $('#deleteModal').modal('hide');
                            $('#row_'+id).remove();
                        }
                    }
                })
            })
        });

    </script>
@endpush