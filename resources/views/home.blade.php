@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h5>Прайс от 03.02.2018</h5>
        <a class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-shopping-cart fa-lg">
                <span class="badge badge-pill badge-primary quntity">1</span>
            </i>
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
                    <th scope="col" class="thead">Опт</th>
                    <th scope="col" class="thead">Интернет</th>
                    <th scope="col" class="thead">Единая</th>
                    <th scope="col" class="thead th_quantity">В заказ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Дезінфікуючий засіб з гарними миючими властивостями</td>
                    <td>120</td>
                    <td>140.12</td>
                    <td>130.00</td>
                    <td>160.54</td>
                    <td>
                        <input type="number" class="qantity">
                        <a href="#"><i class="fa fa-plus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Дезінфікуючий засіб з гарними миючими властивостями Аеродезин з гарними миючими властивостями</td>
                    <td>120</td>
                    <td>140.12</td>
                    <td>130.00</td>
                    <td>160.54</td>
                    <td>
                        <input type="number" class="qantity">
                        <a href="#"><i class="fa fa-plus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Дезінфікуючий засіб з гарними миючими властивостями</td>
                    <td>120</td>
                    <td>140.12</td>
                    <td>130.00</td>
                    <td>160.54</td>
                    <td>
                        <input type="number" class="qantity">
                        <a href="#"><i class="fa fa-plus"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
