using System;
using System.Collections.Generic;
using System.Threading.Tasks;
using DigiAPI;
using DigiAPI.Services;
using DigiAPI.Functions;

namespace SWApi
{
    class Program
    {
        static async Task Main(string[] args)
        {
            var service   = new ApiService();
            var savedList = new List<SavedItem>();

            string opcion;

            do
            {
                Console.WriteLine("Gestor de Digimons ");
                Console.WriteLine("1. Buscar Digimon por nombre");
                Console.WriteLine("2. Listar mis Digimon guardados");
                Console.WriteLine("3. Guardar lista en archivo Json");
                Console.WriteLine("0. Salir");
                Console.Write("Elige una opción: ");
                opcion = Console.ReadLine()?.Trim() ?? "";
                Console.WriteLine();

                switch (opcion)
                {
                    case "1":
                        await  Functions.SearchItem(service, savedList);
                        break;

                    case "2":
                        Functions.ListItems(savedList);
                        break;

                    case "3":

                    Functions.SaveListToJson(savedList);
                    break;

                    case "0":
                        Console.WriteLine("Saliendo...");
                        break;

                    default:
                        Console.WriteLine("Opción incorrecta.");
                        break;
                }

                Console.WriteLine();
            }
            while (opcion != "0");
        }
    }
}
