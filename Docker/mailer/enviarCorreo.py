import smtplib
import sys
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from flask import Flask,request

app = Flask(__name__)

def leer_configuracion():
    # Lee el archivo de configuración
    with open('config.txt', 'r') as file:
        lines = file.readlines()

    # Parsea las líneas del archivo
    config = {}
    for line in lines:
        key, value = line.strip().split(': ')
        config[key] = value

    return config.get('smtp_username'), config.get('smtp_password')

@app.route('/', methods={'POST'})
def enviar_correo():
    receiver_email = request.form.get('receiver_email')
    codigo = request.form.get('codigo')

    try:
        # Configura los detalles del servidor SMTP de Gmail
        smtp_server = 'smtp.gmail.com'
        smtp_port = 587  # Puerto TLS para Gmail
        smtp_username, smtp_password = leer_configuracion()

        # Configura los detalles del correo electrónico
        sender_email = smtp_username
        subject = 'Codigo de confirmación de la reserva'
        body = 'Inserta el siguiente codigo en la pagina web de Cafuné para confirmar tu reserva: '+codigo

        # Configura el mensaje
        message = MIMEMultipart()
        message['From'] = sender_email
        message['To'] = receiver_email
        message['Subject'] = subject
        message.attach(MIMEText(body, 'plain'))

        # Establece la conexión con el servidor SMTP de Gmail
        with smtplib.SMTP(smtp_server, smtp_port) as server:
            server.starttls()  # Usar TLS
            server.login(smtp_username, smtp_password)

            # Envía el correo
            server.sendmail(sender_email, receiver_email, message.as_string())
        
        print("Correo enviado correctamente")

    except Exception as e:
        print(f"Error al enviar el correo: {str(e)}")

    finally:
        return {}

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5001)

