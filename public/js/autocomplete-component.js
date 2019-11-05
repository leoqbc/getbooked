(function ($) {
    var state = document.getElementById('uf_data');
    var drop = document.querySelector('.autocomplete-dropbase');
    var cidades = [
        {
            cidade: "São Paulo"
        },
        {
            cidade: "Guarulhos"
        },
        {
            cidade: "Campinas"
        },
        {
            cidade: "São Bernardo do Campo"
        },
        {
            cidade: "Santo André"
        },
        {
            cidade: "São José dos Campos"
        },
        {
            cidade: "Osasco"
        },
        {
            cidade: "Ribeirão Preto"
        },
        {
            cidade: "Sorocaba"
        },
        {
            cidade: "Mauá"
        },
        {
            cidade: "São José do Rio Preto"
        },
        {
            cidade: "Mogi das Cruzes"
        },
        {
            cidade: "Diadema"
        },
        {
            cidade: "Jundiaí"
        },
        {
            cidade: "Piracicaba"
        }
    ];

    var StatesSearchComponent = {
        init: function (field, values, drop) {
            this.field = field;
            this.values = values;
            this.drop = drop;
            this.links = this.drop.querySelector('.autocomplete-links');
            this.changeHandle();
            this.focusHandle();
        },
        search: function (word) {
            var filtro = [];

            this.values.map(function (el) {
                var matched = el.cidade.match(new RegExp(word, 'i'));
                if (matched !== null) {
                    filtro.push(matched);
                }
            });

            if (filtro.length > 0) {
                this.fillList(filtro);
            }

            if (this.field.value.length === 0 || filtro.length === 0) {
                this.closeList();
            }
        },
        changeHandle: function () {
            var self = this;
            this.field.onkeyup = function () {
                self.search(this.value);
            };
        },
        focusHandle: function () {
            var self = this;
            this.field.onfocus = function () {
                self.search(this.value);
            };
        },
        fillList: function (list) {
            this.clearList();

            var self = this;

            list.map(function (el, key) {
                var item = document.createElement('div');

                item.classList.add('autocomplete-item');
                item.innerHTML = el.input.replace(el[0], '<span class="autocomplete-selected">' + el[0] + '</span>');

                item.onclick = function () {
                    self.closeList();
                    self.field.value = this.innerText;
                }
                self.links.appendChild(item);
            });

            this.links.style.display = 'block';
        },
        clearList: function () {
            this.links.innerHTML = '';
        },
        closeList: function () {
            this.clearList();
            this.links.style.display = 'none';
        }
    }.init(state, cidades, drop);
})(jQuery);
