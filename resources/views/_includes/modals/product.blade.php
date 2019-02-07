<div class="modal fade" id="create_product" tabindex="-1" role="dialog" aria-labelledby="create_product" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="price_category">Добавление нового товара</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="mt-2 mb-2">Наименование</h5>
                <hr>
                <div class="form-group">
                    <label for="name_product">Название товара</label>
                    <input type="text" class="form-control form-control-sm" id="name_product" placeholder="Введите название товара">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="quantity">Остаток</label>
                        <input type="number" class="form-control form-control-sm" id="quantity" placeholder="Введите отстаток">
                        <small id="quantityHelp" class="form-text text-muted">Остаток который доступный на складе</small>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="reserve">Резерв</label>
                        <input type="number" class="form-control form-control-sm" id="reserve" placeholder="Введите кол-во которое находится в резерве">
                        <small id="reserveHelp" class="form-text text-muted">Количество зарезервированного(отложенного,
                            выписанного) данного товара на складе</small>
                    </div>
                </div>
                <h5 class="mt-2 mb-2">Ценовые категории</h5>
                <hr>
                @forelse($priceCategories as $category)
                <div class="form-group">
                    <label for="reserve">Ценовая категория - {{ $category->name }}</label>
                    <input type="number" class="form-control form-control-sm" id="price_category" placeholder="Введите цену данной категории">
                </div>
                @empty
                <h5>На данный момент нет ни одной ценовой категории</h5>
                @endforelse
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
