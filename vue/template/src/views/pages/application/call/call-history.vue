<template>
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-header menu">
                    <div class="page-title">
                        <h4>Call History</h4>
                        <h6>Manage your products</h6>
                    </div>
                </div>
                <div>
                    <ul class="table-top-head">
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                    src="@/assets/img/icons/pdf.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                    src="@/assets/img/icons/excel.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                    src="@/assets/img/icons/printer.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="rotate"><vue-feather
                                    type="rotate-ccw" class="rotate-ccw"></vue-feather></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="up"><vue-feather type="chevron-up"
                                    class="chevron-up"></vue-feather></a>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- /product list -->
            <div class="card table-list-card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-input">
                                <input type="text" placeholder="Search" class="dark-input" />
                                <a href="" class="btn btn-searchset"><vue-feather type="search"
                                        class="feather-search"></vue-feather></a>
                            </div>
                        </div>
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search"
                            v-on:click="filter = !filter"
                :class="{ setclose: filter }">
                                <vue-feather type="filter" class="filter-icon"></vue-feather>
                                <span><img src="@/assets/img/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="form-sort">
                            <vue-feather type="sliders" class="info-img"></vue-feather>
                            <vue-select :options="Sort" id="sortby" placeholder="Sort by Date" />
                        </div>
                    </div>
                    <!-- /Filter -->
                    <div class="card mb-0" id="filter_inputs" :style="{ display: filter ? 'block' : 'none' }">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <vue-feather type="user" class="info-img"></vue-feather>
                                                <vue-select :options="Choose" id="choose" placeholder="Choose Name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <vue-feather type="phone" class="info-img"></vue-feather>
                                                <vue-select :options="Calls" id="calls" placeholder="Choose Calls" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <a class="btn btn-filters ms-auto"> <i data-feather="search"
                                                        class="feather-search"></i> Search </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Filter -->
                    <div class="table-responsive product-list">
                        <a-table :columns="columns" :data-source="data" :row-selection="{}">
                            <template #bodyCell="{ column, record }">
                                <template v-if="column.key === 'Username'">
                                    <div class="userimgname d-flex align-items-center">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img :src="require(`@/assets/img/users/${record.Image}`)" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">{{ record.Username }}</a>
                                    </div>
                                </template>
                                <template v-else-if="column.key === 'Call_Type'">
                                    <div class="phone-call-icon"><vue-feather :type="record.Icon"
                                            class="income-calls me-1"></vue-feather><vue-feather :type="record.Arrow_icon"
                                            :class="record.Class"></vue-feather>{{ record.Call_Type }}
                                    </div>
                                </template>
                                <template v-else-if="column.key === 'action'">
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#user-profile-new">
                                                <vue-feather type="eye" class="eye"></vue-feather>
                                            </a>
                                            <a class="confirm-text p-2" @click="showConfirmation"
                                                href="javascript:void(0);">
                                                <vue-feather type="trash-2" class="trash-2"></vue-feather>
                                            </a>
                                        </div>
                                    </td>
                                </template>
                            </template>
                        </a-table>

                    </div>
                </div>
            </div>
            <!-- /product list -->
        </div>
    </div>
</template>

<script>
const columns = [
    {
        sorter: true,
    },
    {
        title: "Username",
        dataIndex: "Username",
        key: "Username",
        sorter: {
            compare: (a, b) => {
                a = a.Username.toLowerCase();
                b = b.Username.toLowerCase();
                return a > b ? -1 : b > a ? 1 : 0;
            },
        },
    },
    {
        title: "Phone Number",
        dataIndex: "Phone_Number",
        sorter: {
            compare: (a, b) => {
                a = a.Phone_Number.toLowerCase();
                b = b.Phone_Number.toLowerCase();
                return a > b ? -1 : b > a ? 1 : 0;
            },
        },
    },
    {
        title: "Call Type",
        dataIndex: "Call_Type",
        key: "Call_Type",
        sorter: {
            compare: (a, b) => {
                a = a.Call_Type.toLowerCase();
                b = b.Call_Type.toLowerCase();
                return a > b ? -1 : b > a ? 1 : 0;
            },
        },
    },
    {
        title: "Duration",
        dataIndex: "Duration",
        sorter: {
            compare: (a, b) => {
                a = a.Duration.toLowerCase();
                b = b.Duration.toLowerCase();
                return a > b ? -1 : b > a ? 1 : 0;
            },
        },
    },
    {
        title: "Date & Time",
        dataIndex: "Date_Time",
        sorter: {
            compare: (a, b) => {
                a = a.Date_Time.toLowerCase();
                b = b.Date_Time.toLowerCase();
                return a > b ? -1 : b > a ? 1 : 0;
            },
        },
    },
    {
        title: "Action",
        key: "action",
        sorter: true,
    },
]
const data = [
    {
        id: "",
        Image: "user-01.jpg",
        Username: "Arroon",
        Phone_Number: "+1 25182 94528",
        Icon: "phone",
        Arrow_icon: "arrow-down-left",
        Class: "income-success me-1",
        Call_Type: "Incoming Call",
        Duration: "0.25",
        Date_Time: "19 Jan 2023 - 01:16 PM"
    },
    {
        id: "",
        Image: "user-02.jpg",
        Username: "Rose",
        Phone_Number: "+1 93016 81932",
        Icon: "phone",
        Arrow_icon: "arrow-up-right",
        Class: "income-success-missed me-1",
        Call_Type: "Missed Call",
        Duration: "0",
        Date_Time: "24 Jan 2023 - 02:50 PM"
    },
    {
        id: "",
        Image: "user-03.jpg",
        Username: "Benjamin",
        Phone_Number: "+1 25182 94528",
        Icon: "video",
        Arrow_icon: "arrow-down-left",
        Class: "income-success me-1",
        Call_Type: "Incoming Call",
        Duration: "0.15",
        Date_Time: "03 Feb 2023 - 10:37 AM"
    },
    {
        id: "",
        Image: "user-04.jpg",
        Username: "Kaitlin",
        Phone_Number: "+1 70328 96042",
        Icon: "phone",
        Arrow_icon: "arrow-down-left",
        Class: "income-success-missed me-1",
        Call_Type: "Missed Call",
        Duration: "0",
        Date_Time: "17 Feb 2023 - 11:25 AM"
    },
    {
        id: "",
        Image: "user-05.jpg",
        Username: "Lilly",
        Phone_Number: "+1 83610 45175",
        Icon: "video",
        Arrow_icon: "arrow-up-right",
        Class: "income-success me-1",
        Call_Type: "Outgoing Call",
        Duration: "0.45",
        Date_Time: "14 Mar 2023 - 09:12 AM"
    },
    {
        id: "",
        Image: "user-08.jpg",
        Username: "Freda",
        Phone_Number: "+1 46217 84294",
        Icon: "phone",
        Arrow_icon: "arrow-down-left",
        Class: "income-success me-1",
        Call_Type: "Incoming Call",
        Duration: "0.3",
        Date_Time: "27 Mar 2023 - 04:32 PM"
    },
    {
        id: "",
        Image: "user-06.jpg",
        Username: "Alwin",
        Phone_Number: "+1 62573 84301",
        Icon: "phone",
        Arrow_icon: "arrow-up-right",
        Class: "income-success me-1",
        Call_Type: "Outgoing Call",
        Duration: "1.17",
        Date_Time: "13 Apr 2023 - 02:46 PM"
    },
    {
        id: "",
        Image: "user-07.jpg",
        Username: "Maybelle",
        Phone_Number: "+1 14693 63826",
        Icon: "video",
        Arrow_icon: "arrow-down-left",
        Class: "income-success-missed me-1",
        Call_Type: "Missed Call",
        Duration: "0",
        Date_Time: "11 Apr 2023 - 10:29 AM"
    },
    {
        id: "",
        Image: "user-10.jpg",
        Username: "Ellen",
        Phone_Number: "+1 83710 43827",
        Icon: "phone",
        Arrow_icon: "arrow-down-left",
        Class: "income-success me-1",
        Call_Type: "Incoming Call",
        Duration: "0.5",
        Date_Time: "14 May 2023 - 03:06 PM",
    },
    {
        id: "",
        Image: "user-12.jpg",
        Username: "Grace",
        Phone_Number: "+1 42695 07322",
        Icon: "video",
        Arrow_icon: "arrow-down-left",
        Class: "income-success-missed me-1",
        Call_Type: "Missed Call",
        Duration: "0",
        Date_Time: "29 May 2023 - 11:23 AM"
    }
]

import 'sweetalert2/dist/sweetalert2.min.css';
import Swal from 'sweetalert2';

export default {
    data() {
        return {
            columns,
            data,
            filter: false,
            Sort: ["Sort by Date", "Newest", "Oldest"],
            Choose: ["Choose Name", "Thomas", "Rose"],
            Calls: ["Choose Calls", "All Calls", "Missed Calls", "Outgoing Calls", "Incoming Calls"]
        }
    },
    methods: {
        showConfirmation() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-danger ml-1',
                buttonsStyling: false,
            }).then((result) => {
                if (result.value) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: 'Your file has been deleted.',
                        confirmButtonClass: 'btn btn-success',
                    });
                }
            });
        },
    },
}
</script>