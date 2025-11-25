using System;
using System.Collections.Generic;
using System.Threading.Tasks;
using System.IO;
using System.Text.Json;
using DigiAPI;
using DigiAPI.Services;

namespace DigiAPI.Functions
{
    public static class Functions
{
    public static async Task SearchItem(ApiService service, List<SavedItem> savedList)
    {
        Console.Write("Nombre del Digimon: ");
        string input = Console.ReadLine()?.Trim() ?? "";

        if (string.IsNullOrWhiteSpace(input))
        {
            Console.WriteLine("No puede estar vacío.\n");
            return;
        }

        SavedItem? item = await service.GetItemAsync(input);

        if (item == null)
        {
            Console.WriteLine("Digimon no encontrado.\n");
            return;
        }

        Console.WriteLine("=== RESULTADO ===");
        Console.WriteLine($"Nombre : {item.Name}");
        Console.WriteLine($"Nivel : {item.Level}");
        Console.WriteLine($"Tipo: {item.Type}");
        Console.WriteLine();

        Console.Write("¿Quieres guardarlo en tu lista? (s/n): ");
        string op = (Console.ReadLine() ?? "").Trim().ToLower();

        if (op == "s")
        {
            savedList.Add(item);
            Console.WriteLine("Guardado.");
        }
        else
        {
            Console.WriteLine("No guardado.");
        }
    }

    public static void ListItems(List<SavedItem> savedList)
    {
        if (savedList.Count == 0)
        {
            Console.WriteLine("No tienes Digimons guardados todavía.");
            return;
        }

        Console.WriteLine("=== MIS DIGIMONS ===");
        for (int i = 0; i < savedList.Count; i++)
        {
            var p = savedList[i];
            Console.WriteLine($"{i + 1}. {p.Name} | {p.Level} | {p.Type}");
        }
    }

    public static void SaveListToJson(List<SavedItem> list)
    {
        string json = JsonSerializer.Serialize(list, new JsonSerializerOptions
        {
            WriteIndented = true
        });


        File.WriteAllText("./mis_digimons.json.", json);

        Console.WriteLine("Archivo JSON guardado correctamente.");
    }


}

}
