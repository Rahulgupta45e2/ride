<html>

<head>
</head>

<body>
    <div class="container">
        <div class="device">
            <div class="header">
                <button class="button-icon menu"></button>
                <button class="button-icon notification"></button>
            </div>

            <div class="booking">
                <span> Car Booking History</span>
            </div>
            <ul class="options">
                <li class="car">
                    <div class="pic audi"></div>
                    <div class="info">
                        <span>Audi A3</span>
                        <small>Automatic</small>
                        <small>Booked</small>
                        <small>13/04/21-15/04/21</small>
                        <small>3 DAYS</small>
                        <span class="info-price">RM100/day</span>
                    </div>
                </li>

                <div class="cus-name">
                    <div class="cus-name-field-group p-1-3">
                        <label>Customer Name</label><br>
                        <input type="text" class="cus-name-field" placeholder="Nur Ainna Bt Roslan   ">
                    </div>

                    <div class="date-field-group p-1-3">
                        <label>Booking Date</label><br>
                        <input type="text" class="Booking-date" placeholder="start (12/08/21)">
                        <input type="text" class="booking-date" placeholder="end(15/08/21)">
                    </div>

                    <div class="time-field-group p-1-3">
                        <label>Booking Time</label><br>
                        <input type="text" class="Booking-time" placeholder="start  (12:00:00)">
                        <input type="text" class="booking-time" placeholder="end(23:15:00)">
                    </div>
                    <div class="days-field-group p-1-3">
                        <label>Days</label><br>
                        <input type="password" class="days-field" placeholder="4">
                    </div>

                    <div class="insurance-field-group p-1-3">
                        <label>Insurance</label><br>
                        <input type="password" class="insurance-field" placeholder="yes">
                    </div>

                    <div class="amount-field-group p-1-3">
                        <label>Paid</label><br>
                        <input type="password" class="amount-field" placeholder="RM 400">
                    </div>
                    <div class="button p-1-3">
                        <input type="submit">
                    </div>
                    <div class="navbar">
                        <button class="button-icon home active"></button>
                        <button class="button-icon chart"></button>
                        <button class="button-icon paper"></button>
                        <button class="button-icon profile"> </button>
                        <button class="submit"></button>
                        </button>
                    </div>
                </div>
        </div>
</body>
<style>
    .p-1-3 {
        margin-left: 25%;
    }
    
    body {
        padding: 0;
        margin: 0;
        font-family: 'Roboto Mono', monospace;
    }
    
    * {
        box-sizing: border-box;
    }
    
    .container {
        width: 100%;
        padding: 30px 0;
        background: #DAE1ED;
        display: flex;
        justify-content: center;
    }
    
    .device {
        width: 100%;
        height: 100%;
        border-radius: 30px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, .1);
        background: #FFF;
        position: relative;
        overflow: hidden;
    }
    
    .header {
        width: 100%;
        display: flex;
        padding: 30px;
        justify-content: space-between;
    }
    
    button.button-icon {
        border: 1px solid #E5E7EB;
        border-radius: 8px;
        width: 40px;
        height: 40px;
        background-color: transparent;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 18px;
        outline: none;
        cursor: pointer;
        transition: all .3s ease-out;
    }
    
    button.button-icon:hover {
        opacity: 0.6;
    }
    
    button.button-icon.menu {
        background-image: url(https://icon-library.com/images/back-button-icon/back-button-icon-8.jpg);
    }
    
    button.button-icon.notification {
        background-image: url(data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ1MC4yMDEgNDA3LjQ1M2MtMS41MDUtLjk3Ny0xMi44MzItOC45MTItMjQuMTc0LTMyLjkxNy0yMC44MjktNDQuMDgyLTI1LjIwMS0xMDYuMTgtMjUuMjAxLTE1MC41MTEgMC0uMTkzLS4wMDQtLjM4NC0uMDExLS41NzYtLjIyNy01OC41ODktMzUuMzEtMTA5LjA5NS04NS41MTQtMTMxLjc1NnYtMzQuNjU3YzAtMzEuNDUtMjUuNTQ0LTU3LjAzNi01Ni45NDItNTcuMDM2aC00LjcxOWMtMzEuMzk4IDAtNTYuOTQyIDI1LjU4Ni01Ni45NDIgNTcuMDM2djM0LjY1NWMtNTAuMzcyIDIyLjczNC04NS41MjUgNzMuNDk4LTg1LjUyNSAxMzIuMzM0IDAgNDQuMzMxLTQuMzcyIDEwNi40MjgtMjUuMjAxIDE1MC41MTEtMTEuMzQxIDI0LjAwNC0yMi42NjggMzEuOTM5LTI0LjE3NCAzMi45MTctNi4zNDIgMi45MzUtOS40NjkgOS43MTUtOC4wMSAxNi41ODYgMS40NzMgNi45MzkgNy45NTkgMTEuNzIzIDE1LjA0MiAxMS43MjNoMTA5Ljk0N2MuNjE0IDQyLjE0MSAzNS4wMDggNzYuMjM4IDc3LjIyMyA3Ni4yMzhzNzYuNjA5LTM0LjA5NyA3Ny4yMjMtNzYuMjM4aDEwOS45NDdjNy4wODIgMCAxMy41NjktNC43ODQgMTUuMDQyLTExLjcyMyAxLjQ1Ny02Ljg3MS0xLjY2OS0xMy42NTItOC4wMTEtMTYuNTg2em0tMjIzLjUwMi0zNTAuNDE3YzAtMTQuODgxIDEyLjA4Ni0yNi45ODcgMjYuOTQyLTI2Ljk4N2g0LjcxOWMxNC44NTYgMCAyNi45NDIgMTIuMTA2IDI2Ljk0MiAyNi45ODd2MjQuOTE3Yy05LjQ2OC0xLjk1Ny0xOS4yNjktMi45ODctMjkuMzA2LTIuOTg3LTEwLjAzNCAwLTE5LjgzMiAxLjAyOS0yOS4yOTYgMi45ODR2LTI0LjkxNHptMjkuMzAxIDQyNC45MTVjLTI1LjY3MyAwLTQ2LjYxNC0yMC42MTctNDcuMjIzLTQ2LjE4OGg5NC40NDVjLS42MDggMjUuNTctMjEuNTQ5IDQ2LjE4OC00Ny4yMjIgNDYuMTg4em02MC40LTc2LjIzOWMtLjAwMyAwLTIxMy4zODUgMC0yMTMuMzg1IDAgMi41OTUtNC4wNDQgNS4yMzYtOC42MjMgNy44NjEtMTMuNzk4IDIwLjEwNC0zOS42NDMgMzAuMjk4LTk2LjEyOSAzMC4yOTgtMTY3Ljg4OSAwLTYzLjQxNyA1MS41MDktMTE1LjAxIDExNC44MjEtMTE1LjAxczExNC44MjEgNTEuNTkzIDExNC44MjEgMTE1LjA2YzAgLjE4NS4wMDMuMzY5LjAxLjU1My4wNTcgNzEuNDcyIDEwLjI1IDEyNy43NTUgMzAuMjk4IDE2Ny4yODYgMi42MjUgNS4xNzYgNS4yNjcgOS43NTQgNy44NjEgMTMuNzk4eiIvPjwvc3ZnPg==);
    }
    
    .booking {
        font-family: 'Roboto', sans-serif;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 90px;
    }
    
    .booking span {
        font-size: 19px;
        font-weight: 700;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    ul.options {
        margin: 0;
        padding: 0;
        list-style: none;
        padding: 20px 30px 80px;
        height: max-content;
        overflow: auto;
    }
    
    li.car {
        width: 100%;
        display: flex;
        box-shadow: 0 0 30px 1px rgba(119, 119, 119, .1);
        border-radius: 20px;
        padding: 10px;
        background-color: #FFF;
        justify-content: flex-start;
        margin-bottom: 20px;
        min-height: 100px;
        align-items: center;
        cursor: pointer;
        transition: all .3s ease-out;
    }
    
    li.car:hover {
        opacity: 0.9;
    }
    
    li.car .pic {
        height: 200px;
        width: 500%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }
    
    li.car .pic.audi {
        background-image: url(https://stimg.cardekho.com/images/carexteriorimages/930x620/Audi/Audi-A3-2014-2017/3077/1558959770030/front-left-side-47.jpg);
    }
    
    .name {
        width: 100%;
        display: flex;
        padding: 5px;
    }
    
    .name span {
        font-size: 16px;
        font-weight: 700;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    .start {
        width: 100%;
        display: flex;
        padding: 5px;
    }
    
    .start span {
        font-size: 16px;
        font-weight: 700;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    .end {
        width: 100%;
        display: flex;
        padding: 5px;
    }
    
    .end span {
        font-size: 16px;
        font-weight: 700;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    .days {
        width: 100%;
        display: flex;
        padding: 5px;
    }
    
    .days span {
        font-size: 16px;
        font-weight: 700;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    .time {
        width: 100%;
        display: flex;
        padding: 5px;
    }
    
    .time span {
        font-size: 16px;
        font-weight: 700;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    .total {
        width: 100%;
        display: flex;
        padding: 5px;
    }
    
    .total span {
        font-size: 16px;
        font-weight: 700;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    .insurance {
        width: 100%;
        display: flex;
        padding: 5px;
    }
    
    .insurance span {
        font-size: 16px;
        font-weight: 700;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    .navbar {
        /* position: absolute;
        bottom: 0;
        left: 0; */
        padding: 10px 10px;
        margin-top: 1vw;
        background: linear-gradient(to bottom, #ff6600 0%, #ffcc00 100%);
        display: flex;
        width: 100%;
        border-radius: 10px;
        justify-content: space-between;
    }
    
    .navbar button.button-icon {
        border: 0;
        opacity: 2;
        background-size: 24px;
    }
    
    .navbar button.button-icon.active {
        opacity: 1;
    }
    
    .navbar button.button-icon:hover {
        opacity: 2;
    }
    
    button.button-icon.home {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMSA1MTEuOTk5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im00OTguNjk5MjE5IDIyMi42OTUzMTJjLS4wMTU2MjUtLjAxMTcxOC0uMDI3MzQ0LS4wMjczNDMtLjAzOTA2My0uMDM5MDYybC0yMDguODU1NDY4LTIwOC44NDc2NTZjLTguOTAyMzQ0LTguOTA2MjUtMjAuNzM4MjgyLTEzLjgwODU5NC0zMy4zMjgxMjYtMTMuODA4NTk0LTEyLjU4OTg0MyAwLTI0LjQyNTc4MSA0LjkwMjM0NC0zMy4zMzIwMzEgMTMuODA4NTk0bC0yMDguNzQ2MDkzIDIwOC43NDIxODdjLS4wNzAzMTMuMDcwMzEzLS4xNDQ1MzIuMTQ0NTMxLS4yMTA5MzguMjE0ODQ0LTE4LjI4MTI1IDE4LjM4NjcxOS0xOC4yNSA0OC4yMTg3NS4wODk4NDQgNjYuNTU4NTk0IDguMzc4OTA2IDguMzgyODEyIDE5LjQ0MTQwNiAxMy4yMzQzNzUgMzEuMjczNDM3IDEzLjc0NjA5My40ODQzNzUuMDQ2ODc2Ljk2ODc1LjA3MDMxMyAxLjQ1NzAzMS4wNzAzMTNoOC4zMjAzMTN2MTUzLjY5NTMxM2MwIDMwLjQxNzk2OCAyNC43NSA1NS4xNjQwNjIgNTUuMTY3OTY5IDU1LjE2NDA2Mmg4MS43MTA5MzdjOC4yODUxNTcgMCAxNS02LjcxODc1IDE1LTE1di0xMjAuNWMwLTEzLjg3ODkwNiAxMS4yOTI5NjktMjUuMTY3OTY5IDI1LjE3MTg3NS0yNS4xNjc5NjloNDguMTk1MzEzYzEzLjg3ODkwNiAwIDI1LjE2Nzk2OSAxMS4yODkwNjMgMjUuMTY3OTY5IDI1LjE2Nzk2OXYxMjAuNWMwIDguMjgxMjUgNi43MTQ4NDMgMTUgMTUgMTVoODEuNzEwOTM3YzMwLjQyMTg3NSAwIDU1LjE2Nzk2OS0yNC43NDYwOTQgNTUuMTY3OTY5LTU1LjE2NDA2MnYtMTUzLjY5NTMxM2g3LjcxODc1YzEyLjU4NTkzNyAwIDI0LjQyMTg3NS00LjkwMjM0NCAzMy4zMzIwMzEtMTMuODEyNSAxOC4zNTkzNzUtMTguMzY3MTg3IDE4LjM2NzE4Ny00OC4yNTM5MDYuMDI3MzQ0LTY2LjYzMjgxM3ptLTIxLjI0MjE4OCA0NS40MjE4NzZjLTMuMjM4MjgxIDMuMjM4MjgxLTcuNTQyOTY5IDUuMDIzNDM3LTEyLjExNzE4NyA1LjAyMzQzN2gtMjIuNzE4NzVjLTguMjg1MTU2IDAtMTUgNi43MTQ4NDQtMTUgMTV2MTY4LjY5NTMxM2MwIDEzLjg3NS0xMS4yODkwNjMgMjUuMTY0MDYyLTI1LjE2Nzk2OSAyNS4xNjQwNjJoLTY2LjcxMDkzN3YtMTA1LjVjMC0zMC40MTc5NjktMjQuNzQ2MDk0LTU1LjE2Nzk2OS01NS4xNjc5NjktNTUuMTY3OTY5aC00OC4xOTUzMTNjLTMwLjQyMTg3NSAwLTU1LjE3MTg3NSAyNC43NS01NS4xNzE4NzUgNTUuMTY3OTY5djEwNS41aC02Ni43MTA5MzdjLTEzLjg3NSAwLTI1LjE2Nzk2OS0xMS4yODkwNjItMjUuMTY3OTY5LTI1LjE2NDA2MnYtMTY4LjY5NTMxM2MwLTguMjg1MTU2LTYuNzE0ODQ0LTE1LTE1LTE1aC0yMi4zMjgxMjVjLS4yMzQzNzUtLjAxNTYyNS0uNDY0ODQ0LS4wMjczNDQtLjcwMzEyNS0uMDMxMjUtNC40Njg3NS0uMDc4MTI1LTguNjYwMTU2LTEuODUxNTYzLTExLjgwMDc4MS00Ljk5NjA5NC02LjY3OTY4OC02LjY3OTY4Ny02LjY3OTY4OC0xNy41NTA3ODEgMC0yNC4yMzQzNzUuMDAzOTA2IDAgLjAwMzkwNi0uMDAzOTA2LjAwNzgxMi0uMDA3ODEybC4wMTE3MTktLjAxMTcxOSAyMDguODQ3NjU2LTIwOC44Mzk4NDRjMy4yMzQzNzUtMy4yMzgyODEgNy41MzUxNTctNS4wMTk1MzEgMTIuMTEzMjgxLTUuMDE5NTMxIDQuNTc0MjE5IDAgOC44NzUgMS43ODEyNSAxMi4xMTMyODIgNS4wMTk1MzFsMjA4LjgwMDc4MSAyMDguNzk2ODc1Yy4wMzEyNS4wMzEyNS4wNjY0MDYuMDYyNS4wOTc2NTYuMDkzNzUgNi42NDQ1MzEgNi42OTE0MDYgNi42MzI4MTMgMTcuNTM5MDYzLS4wMzEyNSAyNC4yMDcwMzJ6bTAgMCIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjwvZz48L3N2Zz4=);
    }
    
    button.button-icon.chart {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ3Ni4zIDQ3Ni4zIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00MTEuNzUsMjUwLjJoLTE4NS42VjY0LjZjMC03LjUtNi0xMy41LTEzLjUtMTMuNWMtMTE3LjIsMC0yMTIuNiw5NS40LTIxMi42LDIxMi42czk1LjQsMjEyLjYsMjEyLjYsMjEyLjYgICAgczIxMi42LTk1LjQsMjEyLjYtMjEyLjZDNDI1LjI1LDI1Ni4zLDQxOS4xNSwyNTAuMiw0MTEuNzUsMjUwLjJ6IE0yMTIuNjUsNDQ5LjNjLTEwMi4zLDAtMTg1LjYtODMuMy0xODUuNi0xODUuNiAgICBjMC05Ny44LDc2LTE3OC4yLDE3Mi4xLTE4NS4xdjE4NS4xYzAsNy41LDYsMTMuNSwxMy41LDEzLjVoMTg1LjFDMzkwLjg1LDM3My4zLDMxMC40NSw0NDkuMywyMTIuNjUsNDQ5LjN6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJPHBhdGggZD0iTTQ3Ni4yNSwyMTEuOWMtMC4yLTUxLjYtMTkuMS0xMDEuMy01My4yLTE0MEMzODIuNjUsMjYuMiwzMjQuNjUsMCwyNjMuNjUsMGMtNy41LDAtMTMuNSw2LTEzLjUsMTMuNXYxOTkuMSAgICBjMCw3LjUsNiwxMy41LDEzLjUsMTMuNWgxOTkuMWwwLDBjNy41LDAsMTMuNS02LDEzLjUtMTMuNUM0NzYuMjUsMjEyLjQsNDc2LjI1LDIxMi4yLDQ3Ni4yNSwyMTEuOXogTTI3Ny4xNSwxOTkuMlYyNy42ICAgIGM0OC4yLDMuNSw5My40LDI1LjgsMTI1LjYsNjIuM2MyNywzMC41LDQzLDY4LjksNDYsMTA5LjNIMjc3LjE1eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=);
    }
    
    button.button-icon.paper {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHBhdGggZD0iTTQzNy4zMzMsMTI4SDMzMC42NjdjLTUuODg4LDAtMTAuNjY3LTQuOC0xMC42NjctMTAuNjY3VjEwLjY2N0MzMjAsNC43NzksMzE1LjIyMSwwLDMwOS4zMzMsMEg5NiAgICBDNzguMzU3LDAsNjQsMTQuMzU3LDY0LDMydjQ0OGMwLDE3LjY0MywxNC4zNTcsMzIsMzIsMzJoMzIwYzE3LjY0MywwLDMyLTE0LjM1NywzMi0zMlYxMzguNjY3ICAgIEM0NDgsMTMyLjc3OSw0NDMuMjIxLDEyOCw0MzcuMzMzLDEyOHogTTQyNi42NjcsNDgwYzAsNS44NjctNC43NzksMTAuNjY3LTEwLjY2NywxMC42NjdIOTZjLTUuODg4LDAtMTAuNjY3LTQuOC0xMC42NjctMTAuNjY3VjMyICAgIGMwLTUuODY3LDQuNzc5LTEwLjY2NywxMC42NjctMTAuNjY3aDIwMi42Njd2OTZjMCwxNy42NDMsMTQuMzU3LDMyLDMyLDMyaDk2VjQ4MHoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHBhdGggZD0iTTQ0NC44NjQsMTMxLjEzNmwtMTI4LTEyOGMtNC4xNi00LjE2LTEwLjkyMy00LjE2LTE1LjA4MywwYy00LjE2LDQuMTYtNC4xNiwxMC45MjMsMCwxNS4wODNsMTI4LDEyOCAgICBjMi4wOTEsMi4wNjksNC44MjEsMy4xMTUsNy41NTIsMy4xMTVjMi43MzEsMCw1LjQ2MS0xLjA0NSw3LjUzMS0zLjExNUM0NDkuMDI0LDE0Mi4wNTksNDQ5LjAyNCwxMzUuMjk2LDQ0NC44NjQsMTMxLjEzNnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+);
    }
    
    button.button-icon.profile {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIuMDAxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yMTAuMzUxNTYyIDI0Ni42MzI4MTJjMzMuODgyODEzIDAgNjMuMjE4NzUtMTIuMTUyMzQzIDg3LjE5NTMxMy0zNi4xMjg5MDYgMjMuOTY4NzUtMjMuOTcyNjU2IDM2LjEyNS01My4zMDQ2ODcgMzYuMTI1LTg3LjE5MTQwNiAwLTMzLjg3NS0xMi4xNTIzNDQtNjMuMjEwOTM4LTM2LjEyODkwNi04Ny4xOTE0MDYtMjMuOTc2NTYzLTIzLjk2ODc1LTUzLjMxMjUtMzYuMTIxMDk0LTg3LjE5MTQwNy0zNi4xMjEwOTQtMzMuODg2NzE4IDAtNjMuMjE4NzUgMTIuMTUyMzQ0LTg3LjE5MTQwNiAzNi4xMjVzLTM2LjEyODkwNiA1My4zMDg1OTQtMzYuMTI4OTA2IDg3LjE4NzVjMCAzMy44ODY3MTkgMTIuMTU2MjUgNjMuMjIyNjU2IDM2LjEyODkwNiA4Ny4xOTUzMTIgMjMuOTgwNDY5IDIzLjk2ODc1IDUzLjMxNjQwNiAzNi4xMjUgODcuMTkxNDA2IDM2LjEyNXptLTY1Ljk3MjY1Ni0xODkuMjkyOTY4YzE4LjM5NDUzMi0xOC4zOTQ1MzIgMzkuOTcyNjU2LTI3LjMzNTkzOCA2NS45NzI2NTYtMjcuMzM1OTM4IDI1Ljk5NjA5NCAwIDQ3LjU3ODEyNiA4Ljk0MTQwNiA2NS45NzY1NjMgMjcuMzM1OTM4IDE4LjM5NDUzMSAxOC4zOTg0MzcgMjcuMzM5ODQ0IDM5Ljk4MDQ2OCAyNy4zMzk4NDQgNjUuOTcyNjU2IDAgMjYtOC45NDUzMTMgNDcuNTc4MTI1LTI3LjMzOTg0NCA2NS45NzY1NjItMTguMzk4NDM3IDE4LjM5ODQzOC0zOS45ODA0NjkgMjcuMzM5ODQ0LTY1Ljk3NjU2MyAyNy4zMzk4NDQtMjUuOTkyMTg3IDAtNDcuNTcwMzEyLTguOTQ1MzEyLTY1Ljk3MjY1Ni0yNy4zMzk4NDQtMTguMzk4NDM3LTE4LjM5NDUzMS0yNy4zNDM3NS0zOS45NzY1NjItMjcuMzQzNzUtNjUuOTc2NTYyIDAtMjUuOTkyMTg4IDguOTQ1MzEzLTQ3LjU3NDIxOSAyNy4zNDM3NS02NS45NzI2NTZ6bTAgMCIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQyNi4xMjg5MDYgMzkzLjcwMzEyNWMtLjY5MTQwNi05Ljk3NjU2My0yLjA4OTg0NC0yMC44NTkzNzUtNC4xNDg0MzctMzIuMzUxNTYzLTIuMDc4MTI1LTExLjU3ODEyNC00Ljc1MzkwNy0yMi41MjM0MzctNy45NTcwMzEtMzIuNTI3MzQzLTMuMzEyNS0xMC4zMzk4NDQtNy44MDg1OTQtMjAuNTUwNzgxLTEzLjM3NS0zMC4zMzU5MzgtNS43Njk1MzItMTAuMTU2MjUtMTIuNTUwNzgyLTE5LTIwLjE2MDE1Ny0yNi4yNzczNDMtNy45NTcwMzEtNy42MTMyODItMTcuNjk5MjE5LTEzLjczNDM3Ni0yOC45NjQ4NDMtMTguMTk5MjE5LTExLjIyNjU2My00LjQ0MTQwNy0yMy42Njc5NjktNi42OTE0MDctMzYuOTc2NTYzLTYuNjkxNDA3LTUuMjI2NTYzIDAtMTAuMjgxMjUgMi4xNDQ1MzItMjAuMDQyOTY5IDguNS02LjAwNzgxMiAzLjkxNzk2OS0xMy4wMzUxNTYgOC40NDkyMTktMjAuODc4OTA2IDEzLjQ2MDkzOC02LjcwNzAzMSA0LjI3MzQzOC0xNS43OTI5NjkgOC4yNzczNDQtMjcuMDE1NjI1IDExLjkwMjM0NC0xMC45NDkyMTkgMy41NDI5NjgtMjIuMDY2NDA2IDUuMzM5ODQ0LTMzLjA0Mjk2OSA1LjMzOTg0NC0xMC45Njg3NSAwLTIyLjA4NTkzNy0xLjc5Njg3Ni0zMy4wNDI5NjgtNS4zMzk4NDQtMTEuMjEwOTM4LTMuNjIxMDk0LTIwLjMwMDc4Mi03LjYyNS0yNi45OTYwOTQtMTEuODk4NDM4LTcuNzY5NTMyLTQuOTY0ODQ0LTE0LjgwMDc4Mi05LjQ5NjA5NC0yMC44OTg0MzgtMTMuNDY4NzUtOS43NTM5MDYtNi4zNTU0NjgtMTQuODA4NTk0LTguNS0yMC4wMzUxNTYtOC41LTEzLjMxMjUgMC0yNS43NSAyLjI1MzkwNi0zNi45NzI2NTYgNi42OTkyMTktMTEuMjU3ODEzIDQuNDU3MDMxLTIxLjAwMzkwNiAxMC41NzgxMjUtMjguOTY4NzUgMTguMTk5MjE5LTcuNjA5Mzc1IDcuMjgxMjUtMTQuMzkwNjI1IDE2LjEyMTA5NC0yMC4xNTYyNSAyNi4yNzM0MzctNS41NTg1OTQgOS43ODUxNTctMTAuMDU4NTk0IDE5Ljk5MjE4OC0xMy4zNzEwOTQgMzAuMzM5ODQ0LTMuMTk5MjE5IDEwLjAwMzkwNi01Ljg3NSAyMC45NDUzMTMtNy45NTMxMjUgMzIuNTIzNDM3LTIuMDYyNSAxMS40NzY1NjMtMy40NTcwMzEgMjIuMzYzMjgyLTQuMTQ4NDM3IDMyLjM2MzI4Mi0uNjc5Njg4IDkuNzc3MzQ0LTEuMDIzNDM4IDE5Ljk1MzEyNS0xLjAyMzQzOCAzMC4yMzQzNzUgMCAyNi43MjY1NjIgOC40OTYwOTQgNDguMzYzMjgxIDI1LjI1IDY0LjMyMDMxMiAxNi41NDY4NzUgMTUuNzQ2MDk0IDM4LjQzNzUgMjMuNzMwNDY5IDY1LjA2NjQwNiAyMy43MzA0NjloMjQ2LjUzMTI1YzI2LjYyMTA5NCAwIDQ4LjUxMTcxOS03Ljk4NDM3NSA2NS4wNjI1LTIzLjczMDQ2OSAxNi43NTc4MTMtMTUuOTQ1MzEyIDI1LjI1MzkwNi0zNy41ODk4NDMgMjUuMjUzOTA2LTY0LjMyNDIxOS0uMDAzOTA2LTEwLjMxNjQwNi0uMzUxNTYyLTIwLjQ5MjE4Ny0xLjAzNTE1Ni0zMC4yNDIxODd6bS00NC45MDYyNSA3Mi44MjgxMjVjLTEwLjkzMzU5NCAxMC40MDYyNS0yNS40NDkyMTggMTUuNDY0ODQ0LTQ0LjM3ODkwNiAxNS40NjQ4NDRoLTI0Ni41MjczNDRjLTE4LjkzMzU5NCAwLTMzLjQ0OTIxOC01LjA1ODU5NC00NC4zNzg5MDYtMTUuNDYwOTM4LTEwLjcyMjY1Ni0xMC4yMDcwMzEtMTUuOTMzNTk0LTI0LjE0MDYyNS0xNS45MzM1OTQtNDIuNTg1OTM3IDAtOS41OTM3NS4zMTY0MDYtMTkuMDY2NDA3Ljk0OTIxOS0yOC4xNjAxNTcuNjE3MTg3LTguOTIxODc0IDEuODc4OTA2LTE4LjcyMjY1NiAzLjc1LTI5LjEzNjcxOCAxLjg0NzY1Ni0xMC4yODUxNTYgNC4xOTkyMTktMTkuOTM3NSA2Ljk5NjA5NC0yOC42NzU3ODIgMi42ODM1OTMtOC4zNzg5MDYgNi4zNDM3NS0xNi42NzU3ODEgMTAuODgyODEyLTI0LjY2Nzk2OCA0LjMzMjAzMS03LjYxNzE4OCA5LjMxNjQwNy0xNC4xNTIzNDQgMTQuODE2NDA3LTE5LjQxNzk2OSA1LjE0NDUzMS00LjkyNTc4MSAxMS42Mjg5MDYtOC45NTcwMzEgMTkuMjY5NTMxLTExLjk4MDQ2OSA3LjA2NjQwNi0yLjc5Njg3NSAxNS4wMDc4MTItNC4zMjgxMjUgMjMuNjI4OTA2LTQuNTU4NTk0IDEuMDUwNzgxLjU1ODU5NCAyLjkyMTg3NSAxLjYyNSA1Ljk1MzEyNSAzLjYwMTU2MyA2LjE2Nzk2OSA0LjAxOTUzMSAxMy4yNzczNDQgOC42MDU0NjkgMjEuMTM2NzE5IDEzLjYyNSA4Ljg1OTM3NSA1LjY0ODQzNyAyMC4yNzM0MzcgMTAuNzUgMzMuOTEwMTU2IDE1LjE1MjM0NCAxMy45NDE0MDYgNC41MDc4MTIgMjguMTYwMTU2IDYuNzk2ODc1IDQyLjI3MzQzNyA2Ljc5Njg3NSAxNC4xMTMyODIgMCAyOC4zMzU5MzgtMi4yODkwNjMgNDIuMjY5NTMyLTYuNzkyOTY5IDEzLjY0ODQzNy00LjQxMDE1NiAyNS4wNTg1OTQtOS41MDc4MTMgMzMuOTI5Njg3LTE1LjE2NDA2MyA4LjA0Mjk2OS01LjE0MDYyNCAxNC45NTMxMjUtOS41OTM3NSAyMS4xMjEwOTQtMTMuNjE3MTg3IDMuMDMxMjUtMS45NzI2NTYgNC45MDIzNDQtMy4wNDI5NjkgNS45NTMxMjUtMy42MDE1NjMgOC42MjUuMjMwNDY5IDE2LjU2NjQwNiAxLjc2MTcxOSAyMy42MzY3MTkgNC41NTg1OTQgNy42MzY3MTkgMy4wMjM0MzggMTQuMTIxMDkzIDcuMDU4NTk0IDE5LjI2NTYyNSAxMS45ODA0NjkgNS41IDUuMjYxNzE5IDEwLjQ4NDM3NSAxMS43OTY4NzUgMTQuODE2NDA2IDE5LjQyMTg3NSA0LjU0Mjk2OSA3Ljk4ODI4MSA4LjIwNzAzMSAxNi4yODkwNjIgMTAuODg2NzE5IDI0LjY2MDE1NiAyLjgwMDc4MSA4Ljc1IDUuMTU2MjUgMTguMzk4NDM4IDcgMjguNjc1NzgyIDEuODY3MTg3IDEwLjQzMzU5MyAzLjEzMjgxMiAyMC4yMzgyODEgMy43NSAyOS4xNDQ1MzF2LjAwNzgxMmMuNjM2NzE5IDkuMDU4NTk0Ljk1NzAzMSAxOC41MjczNDQuOTYwOTM3IDI4LjE0ODQzOC0uMDAzOTA2IDE4LjQ0OTIxOS01LjIxNDg0NCAzMi4zNzg5MDYtMTUuOTM3NSA0Mi41ODIwMzF6bTAgMCIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48L3N2Zz4=);
    }
    
    .cus-name {
        background: #E5E4E2;
        color: #555;
        margin: 0px 0px;
        padding: 10px;
        border-radius: 10px;
    }
    
    .cus-name-field {
        margin-top: 0px;
    }
    
    .Booking-date {
        width: 80px;
        display: inline-block;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    
    .Booking-time {
        width: 80px;
        display: inline-block;
        margin-top: 10px;
    }
    
    .date-field-group {
        margin-top: 10px;
        display: inline-block;
    }
    
    .days-field,
    .insurance-field {
        width: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    
    .days-field-group,
    .insurance-field-group {
        display: inline-block;
    }
    
    .amount-field {
        width: 80px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

</html>