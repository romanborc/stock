class Http {
    async post(url, data) {
        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + $('meta[name="api_token"]').attr('content'),
                },
                body: JSON.stringify(data)
            });
            const resData = await response.json();
            return resData;

        } catch (error) {
            throw new Error("Невозможно записать данные");
        }
    }

    async get(url) {
      try {
        const response = await fetch(url, {
          method: 'GET',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + $('meta[name="api_token"]').attr('content'),
          },
        });
        const resData = await response.json();
        return resData;
      } catch (error) {
        throw new Error("Невозможно получить данные");
      }
    }
}

export default Http;