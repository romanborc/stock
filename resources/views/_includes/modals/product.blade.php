<div class="modal fade" id="create_product" tabindex="-1" role="dialog" aria-labelledby="create_product" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="price_category">Добавление нового товара</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/products" method="POST">
                @csrf
                <div class="modal-body">
                    <h5 class="mt-2 mb-2">Наименование</h5>
                    <hr>
                    <div class="form-group">
                        <label for="name_product">Название товара</label>
                        <input type="text" class="form-control form-control-sm" id="name_product" name="name" placeholder="Введите название товара">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="quantity">Остаток</label>
                            <input type="number" class="form-control form-control-sm" id="quantity" name="quantity" placeholder="Введите кол-во">
                            <small id="quantityHelp" class="form-text text-muted">Остаток который доступный на складе</small>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="reserve">Резерв</label>
                            <input type="number" class="form-control form-control-sm" id="reserve" name="reserve" placeholder="Введите кол-во">
                            <small id="reserveHelp" class="form-text text-muted">Количество зарезервированного(отложенного,
                                выписанного) данного товара на складе</small>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="marriage">Брак</label>
                            <input type="number" class="form-control form-control-sm" id="marriage" name="marriage" placeholder="Введите кол-во">
                            <small id="reserveHelp" class="form-text text-muted">Количество брака, данного товара на складе</small>
                        </div>
                    </div>
                    <h5 class="mt-2 mb-2">Ценовые категории</h5>
                    <hr>
                    @forelse($priceCategories as $category)
                    <div class="form-group">
                        <label for="reserve">Ценовая категория - {{ $category->name }}</label>
                        <input type="hidden" name="prices[{{ $loop->iteration  }}][price_category_id]" value="{{ $category->id  }}">
                        <input type="number" class="form-control form-control-sm" id="price_category" name="prices[{{ $loop->iteration   }}][price]" placeholder="Введите цену данной категории">
                    </div>
                    @empty
                    <h5>На данный момент нет ни одной ценовой категории</h5>
                    @endforelse
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-sm btn-primary">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>
