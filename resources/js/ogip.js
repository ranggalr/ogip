const { default: axios } = require("axios")

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
            gdrive: null,
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
            gdrive: null,
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
            gdrive: null,
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
            gdrive: null,
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
            gdrive: null,
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
            gdrive: null,
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

window.payment_app = function() {
    return {
        loadingState: false,
        state: {
            teamName: null,
            competition: 'ord',
            paymentProof: null,
        },
        submitForm()
        {
            console.log(this.state)
            if(!Object.values(this.state).includes(null))
            {
                let formData = new FormData()
                formData.append('teamName', this.state.teamName)
                formData.append('competition', this.state.competition)
                formData.append('paymentProof', this.state.paymentProof)
                axios.post(route('payment.store'), formData)
                .then(resp => {
                    if(resp.data.status != 'error')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            text: 'Your payment proof has been submitted, thank you!'
                        })
                    }
                    else
                    {
                        swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: resp.data.msg
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
                    title: 'Oops!',
                    icon: 'error',
                    text: 'Please fill the form correctly'
                })
            }
        },
        handlePaymentProof() {
            this.state.paymentProof = this.$refs.payment_proof.files[0];
        },
    }
}

window.pi_app = function() {
    return {
        state: {
            name: null,
            email: null,
            institution: null,
            major: null,
            phone: null,
        },
        loadingState: false,
        submitForm() {
            this.loadingState = true
            if(!Object.values(this.state).includes(null))
            {
                axios.post(route('event.petroleum-insight.registration'), this.state)
                .then(resp => {
                    if(resp.data.status != 'error')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been submitted, please check your email. Thank you!'
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

window.ceo_app = function() {
    return {
        state: {
            name: null,
            email: null,
            institution: null,
            major: null,
            phone: null,
        },
        loadingState: false,
        submitForm() {
            this.loadingState = true
            if(!Object.values(this.state).includes(null))
            {
                axios.post(route('event.ceo-talk.registration'), this.state)
                .then(resp => {
                    if(resp.data.status != 'error')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been submitted, please check your email. Thank you!'
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

window.vcc_app = function() {
    return {
        state: {
            name: null,
            email: null,
            institution: null,
            major: null,
            phone: null,
        },
        loadingState: false,
        submitForm() {
            this.loadingState = true
            if(!Object.values(this.state).includes(null))
            {
                axios.post(route('event.virtual-company-visit.registration'), this.state)
                .then(resp => {
                    if(resp.data.status != 'error')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been submitted, please check your email. Thank you!'
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

window.ppc_submission_app = function() {
    return {
        loadingState: false,
        state: {
            teamName: null,
            university: null,
            fullPaper: null,
            powerPoint: null,
            poster: null,
        },
        submitForm()
        {
            console.log(this.state)
            if(!Object.values(this.state).includes(null))
            {
                let formData = new FormData()
                formData.append('teamName', this.state.teamName)
                formData.append('university', this.state.university)
                formData.append('fullPaper', this.state.fullPaper)
                formData.append('powerPoint', this.state.powerPoint)
                formData.append('poster', this.state.poster)
                axios.post(route('competition.paper-poster.submission'), formData)
                .then(resp => {
                    if(resp.data.status != 'error')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            text: 'Your submission has been submitted, thank you!'
                        })
                    }
                    else
                    {
                        swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: resp.data.msg
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
                    title: 'Oops!',
                    icon: 'error',
                    text: 'Please fill the form correctly'
                })
            }
        },
        handleFullPaper() {
            this.state.fullPaper = this.$refs.full_paper.files[0];
        },
        handlePowerPoint() {
            this.state.powerPoint = this.$refs.powerpoint.files[0];
        },
        handlePoster() {
            this.state.poster = this.$refs.poster.files[0];
        },
    }
}


window.pwf_app = function() {
    return {
        state: {
            name: null,
            email: null,
            university: null,
            major: null,
            phone: null,
            category: 'hands on',
            paymentProof: null,
        },
        loadingState: false,
        submitForm() {
            console.log(this.state)
            this.loadingState = true
            if(!Object.values(this.state).includes(null))
            {
                let data = new FormData()
                data.append('name', this.state.name)
                data.append('email', this.state.email)
                data.append('university', this.state.university)
                data.append('major', this.state.major)
                data.append('phone', this.state.phone)
                data.append('category', this.state.category)
                data.append('paymentProof', this.state.paymentProof)
                axios.post(route('event.petroleum-insight.pwf'), data)
                .then(resp => {
                    if(resp.data.status != 'error')
                    {
                        swal.fire({
                            icon: 'success',
                            title: 'HOORAY!',
                            html: 'Your registration has been submitted, please check your email. Thank you!'
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
        },
        handlePaymentProof() {
            this.state.paymentProof = this.$refs.payment_proof.files[0];
        },
    }
}
