class EventEmmiter {
    constructor() {
        this.events = {};
    }

    on(event, listener) {
        if (typeof this.events[event] !== 'object') {
            this.events[event] = [];
        }
        this.events[event].push(listener);
        return () => this.removeListener(event, listener);
    }

    emit(event, args) {
        if (typeof this.events[event] === 'object') {
            this.events[event].forEach(listener => listener(args));
        }
    }

    removeListener(event, listener) {
        if (this.events[event]) {
            const idx = this.events[event].indexOf(listener);
            if (idx > -1) {
                this.events[event].splice(idx, 1);
            }
        }
    }
}

export default EventEmmiter;
