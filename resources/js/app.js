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

window.smart_app = function() {
    return {
        currentStep: 1,
        totalSteps: 5,
        loadingState: false,
        state: {
            teamName: null,
            members: [
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
            ]
        },
        submitForm() {
            this.loadingState = true
            if(this.validateForm())
            {
                axios.post(route('competition.smart-competition.registration'), this.state)
                .then(resp => {
                    if(resp.data.status == 'success')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been successfully submitted, thank you!'
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
            this.loadingState = false
        },
        validateForm()
        {
            if(!Object.values(this.state).includes(null))
            {
                if(Object.values(this.state.members[0]).includes(null) || Object.values(this.state.members[0]).includes(''))
                {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Please fill the leader form correctly!'
                    })
                    return false
                }
                return true
            }
            swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Please fill the form correctly!'
            })
            return false
        }
    }
}

window.ppc_app = function() {
    return {
        currentStep: 1,
        totalSteps: 5,
        loadingState: false,
        state: {
            teamName: null,
            members: [
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
            ]
        },
        submitForm() {
            this.loadingState = true
            if(this.validateForm())
            {
                axios.post(route('competition.paper-poster.registration'), this.state)
                .then(resp => {
                    if(resp.data.status == 'success')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been successfully submitted, thank you!'
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
            this.loadingState = false
        },
        validateForm()
        {
            if(!Object.values(this.state).includes(null))
            {
                if(Object.values(this.state.members[0]).includes(null) || Object.values(this.state.members[0]).includes(''))
                {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Please fill the leader form correctly!'
                    })
                    return false
                }
                return true
            }
            swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Please fill the form correctly!'
            })
            return false
        }
    }
}
window.gcs_app = function() {
    return {
        currentStep: 1,
        totalSteps: 5,
        loadingState: false,
        state: {
            teamName: null,
            members: [
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
            ]
        },
        submitForm() {
            this.loadingState = true
            if(this.validateForm())
            {
                axios.post(route('competition.geothermal.registration'), this.state)
                .then(resp => {
                    if(resp.data.status == 'success')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been successfully submitted, thank you!'
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
            this.loadingState = false
        },
        validateForm()
        {
            if(!Object.values(this.state).includes(null))
            {
                if(Object.values(this.state.members[0]).includes(null) || Object.values(this.state.members[0]).includes(''))
                {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Please fill the leader form correctly!'
                    })
                    return false
                }
                return true
            }
            swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Please fill the form correctly!'
            })
            return false
        }
    }
}

window.simres_app = function() {
    return {
        currentStep: 1,
        totalSteps: 5,
        loadingState: false,
        state: {
            teamName: null,
            members: [
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
            ]
        },
        submitForm() {
            this.loadingState = true
            if(this.validateForm())
            {
                axios.post(route('competition.reservoir-simulation.registration'), this.state)
                .then(resp => {
                    if(resp.data.status == 'success')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been successfully submitted, thank you!'
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
            this.loadingState = false
        },
        validateForm()
        {
            if(!Object.values(this.state).includes(null))
            {
                if(Object.values(this.state.members[0]).includes(null) || Object.values(this.state.members[0]).includes(''))
                {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Please fill the leader form correctly!'
                    })
                    return false
                }
                return true
            }
            swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Please fill the form correctly!'
            })
            return false
        }
    }
}

window.pod_app = function() {
    return {
        currentStep: 1,
        totalSteps: 7,
        loadingState: false,
        state: {
            teamName: null,
            members: [
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
            ]
        },
        submitForm() {
            this.loadingState = true
            if(this.validateForm())
            {
                axios.post(route('competition.plan-of-development.registration'), this.state)
                .then(resp => {
                    if(resp.data.status == 'success')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been successfully submitted, thank you!'
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
            this.loadingState = false
        },
        validateForm()
        {
            if(!Object.values(this.state).includes(null))
            {
                if(Object.values(this.state.members[0]).includes(null) || Object.values(this.state.members[0]).includes(''))
                {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Please fill the leader form correctly!'
                    })
                    return false
                }
                return true
            }
            swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Please fill the form correctly!'
            })
            return false
        }
    }
}
window.ord_app = function() {
    return {
        currentStep: 1,
        totalSteps: 7,
        loadingState: false,
        state: {
            teamName: null,
            members: [
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
                {
                    name: null,
                    email: null,
                    phone: null,
                    university: null,
                    major: null,
                    studentId: null,
                },
            ]
        },
        submitForm() {
            this.loadingState = true
            if(this.validateForm())
            {
                axios.post(route('competition.oil-rig-design.registration'), this.state)
                .then(resp => {
                    if(resp.data.status == 'success')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been successfully submitted, thank you!'
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
            this.loadingState = false
        },
        validateForm()
        {
            if(!Object.values(this.state).includes(null))
            {
                if(Object.values(this.state.members[0]).includes(null) || Object.values(this.state.members[0]).includes(''))
                {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Please fill the leader form correctly!'
                    })
                    return false
                }
                return true
            }
            swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Please fill the form correctly!'
            })
            return false
        }
    }
}
