Vue.component('number-input', {
    props: {
        value: [String, Number],
        isInteger: Boolean,
        readonly: Boolean,
        precision: {
            type: Number,
            default: 2,
        },
    },
    template: '<input type="text" class="form-control form-control-sm text-right" v-model="displayValue" :readonly="readonly" @blur="isInputActive=false" @focus="isInputActive=true"/>',
    data: function () {
        return {
            isInputActive: false,
        };
    },
    computed: {
        displayValue: {
            get: function () {
                if (this.isInputActive && !this.readonly) {
                    return this.value.toString();
                } else {
                    return this.isInteger ? this.value : U.addCommas(U.toFloat(this.value).toFixed(this.precision));
                }
            },
            set: function (modifiedValue) {
                let newValue = this.isInteger ? U.toInt(modifiedValue) : U.toFloat(modifiedValue);
                this.$emit('input', newValue);
            },
        },
    },
});
