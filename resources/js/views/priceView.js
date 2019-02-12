import EventEmmiter from '../helpers/helpers.js';
class PriceView extends EventEmmiter {
    constructor() {
        super();
        $('#create_price_category').click((e) => this.handleAdd(e));
        $('#show_price_category').click((e) => this.handleShow(e));
        $(document).on('click', '#delete_price_category', (e) => this.handleDelete(e));
        
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
                <a href="#" id="delete_price_category" data-id="${e.id}"><i class="far fa-trash-alt fa-lg" data-id="${e.id}"></i></a>
              </td>
            </tr>
          `);
        });
    }

    handleDelete(event) {
      const id = $(event.currentTarget).data('id');
      this.emit('delete_price_category', id);
      
    }

    reloadPage() {
        location.reload();
    }


}

export default PriceView;
