import EventEmmiter from '../helpers/helpers.js';
class PriceView extends EventEmmiter {
    constructor() {
        super();
        $('#create_price_category').click((e) => this.handleAdd(e));
        $('#show_price_category').click((e) => this.handleShow(e));
        $('#close_modal_price_categories').click((e) => this.reloadPage());
    }

    handleAdd(event) {
        const data = $('.price_category').val();
        this.emit('store_price_category', data);
    }

    handleShow(event) {
        this.emit('show_price_category');
    }


    show(data) {
        const priceCategories = data.data;
        $('.price_categories tr').remove();
        $('.price_category').val('');
        $.each(priceCategories, function (i, e) {
            $('.price_categories').append(`
            <tr>  
              <td>${e.name}</td>
              <td>
                <a href="#" class="mr-2"><i class="far fa-edit fa-lg"></i></a>
                <a href="#"><i class="far fa-trash-alt fa-lg"></i></a>
              </td>
            </tr>
          `);
        });
    }

    reloadPage() {
        location.reload();
    }
}

export default PriceView;
