const { default: axios } = require('axios');
import Swal from 'sweetalert2'
window.swal = Swal

require('./bootstrap');

require('alpinejs');


window.voc_app = function() {
    return {
        state: {
            name: null,
            email: null,
            institution: null,
            major: null,
            line: null,
            phone: null,
        },
        loadingState: false,
        submitForm() {
            this.loadingState = true
            if(!Object.values(this.state).includes(null))
            {
                axios.post(route('event.voc.registration'), this.state)
                .then(resp => {
                    if(resp.data.status != 'error')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been submitted, please check uploading rules by clicking <a href="' + route('event.voc') + '#details">here</a>'
                        })
                    }
                    else
                    {
                        swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            html: resp.data.msg
                        })
                    }
                })
                .catch(e => {
                    swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: Object.values(e.response.data.errors).map(e => {return '<li>' + e + '</li>'}).join('')
                    })
                })
            }
            else
            {
                swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    html: 'Please fill all the form correctly'
                })
            }
            this.loadingState = false
        }
    }
}
