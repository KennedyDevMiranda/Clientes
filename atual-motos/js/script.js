document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("form-agendamento");

    form.addEventListener("submit", async function (event) {
        event.preventDefault(); // evita recarregar a página

        const nome = document.getElementById("nome").value.trim();
        const telefone = document.getElementById("telefone").value.trim();
        const placa = document.getElementById("placa").value.trim();
        const servico = document.getElementById("servico").value;
        const data = document.getElementById("data").value; // formato yyyy-mm-dd
        const mensagem = document.getElementById("mensagem").value.trim();

        if (!nome || !telefone) {
            alert("Preencha pelo menos Nome e Telefone.");
            return;
        }

        const payload = {
            nome: nome,
            telefone: telefone,
            placa: placa || null,
            servico: servico || null,
            dataDesejada: data ? new Date(data).toISOString() : null,
            mensagem: mensagem || null
        };

        try {
            const response = await fetch("https://seu-dominio-ou-localhost/api/agendamentos", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(payload)
            });

            const result = await response.json();

            if (!response.ok) {
                console.error(result);
                alert(result.erro || "Erro ao enviar agendamento.");
                return;
            }

            alert("Agendamento enviado com sucesso! Vamos entrar em contato.");

            // Aqui entra a parte do WhatsApp 👇
            enviarParaWhatsApp(payload);

            form.reset();
        } catch (err) {
            console.error(err);
            alert("Erro de conexão com o servidor.");
        }
    });
});