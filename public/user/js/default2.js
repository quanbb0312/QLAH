window.F1GEN_vars = {
    template: "index",
    formatMoney: "",
    account: {
        logged: false,
        id: null,
        email: null
    },
    product: {
        data: null,
        id: null,
        handle: null,
        title: "",
        gift: false,
        availableOption: true
    },
    quickView: null,
    collection: {
        paginate: {
            current: 1,
            value: ""
        },
        data: {
            id: "",
            title: "",
            vendors: "",
            types: "",
            sortBy: ""
        },
        filter: {
            config: {
                price: {
                    min: "0",
                    max: "20000000",
                    step: "20000"
                }
            },
            data: {
                vendors: null,
                types: null,
                sortBy: null,
                prices: null,
                tags: null,
                variants: {
                    option1: null,
                    option2: null,
                    option3: null,
                }
            }
        }
    },
    salePopup: {
        active: false,
        type: "collections",
        orders: salePopupData.o,
        customers: salePopupData.u,
        time: {
            ago: salePopupData.a,
            delayBetween: "100000",
            delayPopup: "40000",
        },
        count: "20",
    }
}