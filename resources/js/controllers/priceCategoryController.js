class PriceCategoryController {
    constructor(url, model, view) {
        this.url = url;
        this.model = model;
        this.view = view;

        view.on('store_price_category', (e) => this.store(e));
        view.on('show_price_category', (e) => this.index(e));
        view.on('delete_price_category', (e) => this.delete(e));
    }

    async index() {
        const response = await this.model.get(`${this.url}/api/prices`);
        this.view.show(response.data);
    }

    async store(data) {
        try {
            if (!data) {
                throw new SyntaxError("Некорректны данные");
            }
            const category = {
                'name': data,
            }
            await this.model.post(`${this.url}/api/prices`, category);
            this.index();
        } catch (e) {
            alert(e);

        }
    }

    async delete(id) {
        await this.model.delete(`${this.url}/api/prices/` + id);
        this.index();
    }

}

export default PriceCategoryController;
