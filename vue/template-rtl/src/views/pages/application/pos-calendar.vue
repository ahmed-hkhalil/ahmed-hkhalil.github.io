<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="row align-items-center w-100">
          <div class="col-lg-10 col-sm-12">
            <h3 class="page-title">Calendar</h3>
          </div>
          <div class="col-lg-2 col-sm-12 d-flex justify-content-end p-0">
            <a
              href="javascript:void(0);"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#add_event"
              >Create Event</a
            >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-4">
          <h4 class="card-title">Drag & Drop Event</h4>
          <div id="calendar-events" class="mb-3">
            <div class="calendar-events" data-class="bg-info">
              <i class="fas fa-circle text-info"></i> My Event One
            </div>
            <div class="calendar-events" data-class="bg-success">
              <i class="fas fa-circle text-success"></i> My Event Two
            </div>
            <div class="calendar-events" data-class="bg-danger">
              <i class="fas fa-circle text-danger"></i> My Event Three
            </div>
            <div class="calendar-events" data-class="bg-warning">
              <i class="fas fa-circle text-warning"></i> My Event Four
            </div>
          </div>
          <div class="input-block add-lists todo-inbox-check mb-3">
            <label class="checkboxs">
              <input type="checkbox" id="drop-remove" />
              <span class="checkmarks"></span> Remove after drop
            </label>
          </div>
          <a
            href="javascript:void(0);"
            data-bs-toggle="modal"
            data-bs-target="#add_new_event"
            class="btn mb-3 btn-primary btn-block w-100"
          >
            <i class="fas fa-plus"></i> Add Category
          </a>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="card bg-white">
            <div class="card-body">
              <FullCalendar :options="calendarOptions" :events="events"></FullCalendar>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <calendar-modal></calendar-modal>
</template>
<script>
import FullCalendar from "@fullcalendar/vue3";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";
import { ref } from "vue";
const currentDate = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      events: [],
      calendarOptions: {
        plugins: [
          dayGridPlugin,
          timeGridPlugin,
          interactionPlugin, // needed for dateClick
        ],
        headerToolbar: {
          left: "prev,next today",
          center: "title",
          right: "dayGridMonth,timeGridWeek,timeGridDay",
        },
        events: [
          {
            title: "12:40p Test Event 1",
            start: currentDate,
            className: "bg-success",
          },
          {
            title: "11:20a Test Event 2",
            start: "2023-03-15",
            className: "bg-info",
          },
          {
            title: "10:33a Test Event 3",
            start: "2023-03-17",
            className: "bg-primary",
          },
          {
            title: "5:47a Event Name 4",
            start: "2023-03-15",
            className: "bg-purple",
          },
        ],

        initialView: "dayGridMonth",
        editable: true,
        selectable: true,
        selectMirror: true,
        dayMaxEvents: true,
        weekends: true,
      },
    };
  },
  props: {
    msg: String,
  },
  components: {
    FullCalendar,
  },
};
</script>
