<template>
    <a-table :columns="columns" :data-source="data" :row-selection="{}">
        <template #bodyCell="{ column, record }">
            <template v-if="column.key === 'Name'">
                <router-link to="/inventory/product-list" class="product-img d-flex align-items-center">
                    <img :src="require(`@/assets/img/icons/${record.Image}`)" alt="Product" class="me-2" />
                    <span>{{ record.Name }}</span>
                </router-link>
            </template>
            <template v-else-if="column.key === 'Owned'">
                <div>
                    <a href="javascript:void(0);" class="product-img d-flex align-items-center">
                        <img :src="require(`@/assets/img/avatar/${record.Member_image}`)" alt="Product"
                            class="me-2 rounded-circle" />
                        <span>{{ record.Owned }}</span>
                    </a>
                </div>
            </template>
            <template v-else-if="column.key === 'action'">
                <div class="d-flex align-items-center">
                    <a href="javascript:void(0);" class=""><vue-feather type="star"
                            class="feather-16 me-2 color-primary"></vue-feather></a>
                    <div class="dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item"><vue-feather type="trash-2"
                                        class="feather-14 me-2"></vue-feather>Permanent
                                    Delete</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item"><vue-feather type="edit"
                                        class="feather-14 me-2"></vue-feather>Restore File</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </template>
        </template>
    </a-table>
</template>

<script>
const columns = [
    {
        sorter: true,
    },
    {
        title: "Name",
        dataIndex: "Name",
        key: "Name",
        sorter: {
            compare: (a, b) => {
                a = a.Name.toLowerCase();
                b = b.Name.toLowerCase();
                return a > b ? -1 : b > a ? 1 : 0;
            },
        },
    },
    {
        title: "Last Modified",
        dataIndex: "Modified",
        sorter: {
            compare: (a, b) => {
                a = a.Modified.toLowerCase();
                b = b.Modified.toLowerCase();
                return a > b ? -1 : b > a ? 1 : 0;
            },
        },
    },
    {
        title: "Size",
        dataIndex: "Size",
        sorter: {
            compare: (a, b) => {
                a = a.Size.toLowerCase();
                b = b.Size.toLowerCase();
                return a > b ? -1 : b > a ? 1 : 0;
            },
        },
    },
    {
        title: "Owned Memebr",
        dataIndex: "Owned",
        key: "Owned",
        sorter: {
            compare: (a, b) => {
                a = a.Owned.toLowerCase();
                b = b.Owned.toLowerCase();
                return a > b ? -1 : b > a ? 1 : 0;
            },
        },
    },
    {
        title: "Action",
        key: "action",
        sorter: true,
    },
];
const data = [
    {
        id: "1",
        Image: "folder.svg",
        Name: "Digimed",
        Modified: "Today 08:30 AM \nby Angel",
        Size: "200 MB",
        Owned: "Nolan Christopher",
        Member_image: "avatar-6.jpg",
    },
    {
        id: "2",
        Name: "Estimation",
        Image: "xls.svg",
        Modified: "Today 09:20 AM",
        Size: "140 MB",
        Owned: "Nolan Harris",
        Member_image: "avatar-5.jpg",
    },
    {
        id: "3",
        Image: "pdf-02.svg",
        Name: "Intro.pdf",
        Modified: "27 July 2023",
        Size: "70 MB",
        Owned: "Me",
        Member_image: "avatar-10.jpg",
    },
    {
        id: "4",
        Image: "video.svg",
        Name: "Demoworrking.mp4",
        Modified: "24 July 2023\n08:25 AM",
        Size: "180 MB",
        Owned: "Daniel",
        Member_image: "avatar-2.jpg",
    },
    {
        id: "5",
        Image: "audio.svg",
        Name: "voice.mp3",
        Modified: "27 July 2023",
        Size: "80 MB",
        Owned: "Henriques",
        Member_image: "avatar-7.jpg",
    },
];
export default {
    data() {
        return {
            columns,
            data
        };
    },
};
</script>
