@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h5>Управление прайсом</h5>
    </div>
    <div class="d-flex flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <a class="btn btn-sm btn-primary mr-2" href="#" id="show_price_category" data-toggle="modal" data-target="#price_category">
            <i class="fas fa-plus"></i>
            <span>Ценовые категории</span>
        </a>
        <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#create_product">
            <i class="fas fa-plus"></i>
            <span>Добавить новую позицию</span>
        </a>
    </div>
    <input class="form-control form-control-sm search" type="text" placeholder="Поиск товара...">
    <br>
    <div class="table-responsive-sm table-product">
        <table class="table table-sm table-hover table-bordered price-product">
            <thead>
                <tr>
                    <th scope="col" class="thead">#</th>
                    <th scope="col" class="thead">Наименование</th>
                    <th scope="col" class="thead">Доступный остаток</th>
                    @foreach($priceCategories as $category)
                        <th scope="col" class="thead">{{ $category->name }}</th>
                    @endforeach
                    <th scope="col" class="thead">Действия</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Дезінфікуючий засіб з гарними миючими властивостями</td>
                    <td>120</td>
                    <td>160.54</td>
                    <td>
                        <a href="#" class="mr-3 ml-3"><i class="far fa-edit"></i></a>
                        <a href="#"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
