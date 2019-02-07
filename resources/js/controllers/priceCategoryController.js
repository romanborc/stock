class PriceCategoryController {
  constructor(url, model, view) {
    this.url = url;
    this.model = model;
    this.view = view;

    view.on('store_price_category', (e) => this.store(e));
    view.on('show_price_category', (e) => this.show(e));
  }

  async store(data) {
    if(!data) {
      console.log('test');
    }
    const category = {
      'name': data,
    }
    await this.model.post(`${this.url}/api/prices`, category);
    this.show();
  }

  async show(data) {
    const response = await this.model.get(`${this.url}/api/prices`);
    this.view.show(response.data);
  }

}

export default PriceCategoryController;