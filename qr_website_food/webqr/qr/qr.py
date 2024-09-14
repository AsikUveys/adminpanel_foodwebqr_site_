import qrcode
import time

def generate_qr_code(url):
    code = qrcode.QRCode(
        version=1,
        error_correction=qrcode.constants.ERROR_CORRECT_L,
        box_size=10,
        border=2
    )
    code.add_data(url)
    code.make(fit=True)

    image = code.make_image(fill_color="black", back_color="white")
    timestamp = int(time.time())  # Zaman damgası alınır
    image.save(f'qr_image/qr_{timestamp}.png')  # Zaman damgası kullanılarak dosya adı oluşturulur

url = '.....'
generate_qr_code(url)
