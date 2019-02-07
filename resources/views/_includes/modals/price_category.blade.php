<div class="modal fade" id="price_category" tabindex="-1" role="dialog" aria-labelledby="price_category" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="price_category">Список ценовых категорий</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="price-category mb-2">
                    <table class="table table-sm table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Название</th>
                                <th scope="col">Действия</th>
                            </tr>
                        </thead>
                        <tbody class="price_categories">
                        </tbody>
                    </table>
                </div>
                <h5 class="modal-title mb-2" id="price_category">Добавить новую категорию</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-sm price_category" name="price_category" placeholder="Название категории">
                    <div class="input-group-append">
                        <a href="#" class="btn btn-sm btn-outline-primary" id="create_price_category">
                            <i class="fas fa-plus"></i>
                            <span>Добавить</span>
                        </a>
                    </div>
                </div>
                <small id="reserveHelp" class="form-text text-muted">Введите название новой ценовой категории</small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal" id="close_modal_price_categories">Закрыть</button>
            </div>
        </div>
    </div>
</div>
