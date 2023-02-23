from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        email = request.form.get('email')
        password = request.form.get('password')
        # ici, vous pouvez valider les données et les enregistrer dans une base de données
        return 'Inscription réussie !'
    return render_template('index.html')

if __name__ == '__main__':
    app.run()
