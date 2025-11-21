using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Http;
using Microsoft.Extensions.Hosting;

var builder = WebApplication.CreateBuilder(args);
var app = builder.Build();

// Rota para receber o formulário de contato
app.MapPost("/api/contato", async (ContatoDto contato) =>
{
    // Aqui você salvaria no banco ou enviaria um e-mail
    // Exemplo simples: só escrever no console
    Console.WriteLine($"Contato de: {contato.Nome} - {contato.Email}");
    Console.WriteLine($"Mensagem: {contato.Mensagem}");

    return Results.Ok(new { mensagem = "Contato recebido com sucesso!" });
});

app.Run();

public record ContatoDto(string Nome, string Email, string Mensagem);