<template>
    <Layout>
        <div class="container">
            <form @submit.prevent="handleSubmit">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter Name"
                                v-model="lead.name"
                                id="name"
                                tabindex="1"
                            />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter Phone"
                                v-model="lead.phone"
                                id="phone"
                                tabindex="3"
                            />
                        </div>
                        <div class="form-group">
                            <label for="ip">Interested Package</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter Interested Package"
                                v-model="lead.package"
                                id="ip"
                                tabindex="5"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter Email"
                                v-model="lead.email"
                                id="email"
                                tabindex="2"
                            />
                        </div>
                        <div class="form-group">
                            <label for="dob">Date Of Birth</label>
                            <input
                                type="date"
                                class="form-control"
                                placeholder="Enter Date of Birth"
                                v-model="lead.dob"
                                id="dob"
                                tabindex="4"
                            />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-success" type="submit">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </Layout>
</template>

<script>
import Layout from "./../../Shared/Layout.vue";
export default {
    components: {
        Layout
    },
    data() {
        return {
            lead: {
                name: "",
                email: "",
                phone: "",
                dob: "",
                package: ""
            }
        };
    },
    methods: {
        handleSubmit() {
            this.$inertia.post("/leads/save", this.lead);
        }
        // async handleSubmit() {
        //     let response = await this.$inertia.post("/leads/save", this.lead);
        // }
    }
};
</script>
