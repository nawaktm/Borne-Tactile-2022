const wifi = {
    ssid: 'ssid',
    pass: 'password',
    type: 'WPA',
};

const qrImg = document.getElementById('qr');
const ssid = document.getElementById('ssid');
const pass = document.getElementById('pass');
const update = document.getElementById('update');
update.addEventListener('click', updatePrint);



function updatePrint () {
    updateInfo();
    setTimeout(() => window.print(), 750);
}

function updateInfo () {
    wifi.ssid = ssid.value;
    wifi.pass = pass.value;
    let qrUrl = `https://zxing.org/w/chart?cht=qr&chs=350x350&chld=L&choe=UTF-8&chl=${encodeURIComponent(`WIFI:S:${wifi.ssid};T:${wifi.type};P:${wifi.pass};`)}`;
    qrImg.src = qrUrl;
}
