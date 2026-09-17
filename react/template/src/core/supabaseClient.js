import { createClient } from "@supabase/supabase-js";

export const supabaseUrl = "https://guxzeyenofsjeodowghr.supabase.co";
export const supabaseAnonKey = "sb_publishable_0-DYmB7xnZgVV7hVU35IVA_juWlittQ";

export const supabase = createClient(supabaseUrl, supabaseAnonKey);

/**
 * Fetch all available products from the database.
 */
export async function getProducts() {
  const { data, error } = await supabase
    .from("products")
    .select("*")
    .order("name", { ascending: true });

  if (error) {
    console.error("Error fetching products:", error);
    return [];
  }
  return data || [];
}

/**
 * Save a completed sale / POS order into the database.
 */
export async function saveSale({ cashierName, totalAmount, paymentMethod, items }) {
  const { data, error } = await supabase
    .from("sales")
    .insert([
      {
        cashier_name: cashierName || "Cashier",
        total_amount: parseFloat(totalAmount) || 0,
        payment_method: paymentMethod || "Cash",
        items: items || [],
      },
    ])
    .select();

  if (error) {
    console.error("Error saving sale:", error);
    throw error;
  }
  return data;
}

/**
 * Seed initial sample catalog items if database is empty or minimal.
 */
export async function seedInitialProductsIfEmpty() {
  try {
    const { count, error } = await supabase
      .from("products")
      .select("*", { count: "exact", head: true });

    if (error) {
      console.error("Error checking product count:", error);
      return;
    }

    if (count === 0 || count <= 1) {
      const sampleProducts = [
        { name: "MacBook Pro 16\"", sku: "MBP-16", price: 2499.00, stock: 12 },
        { name: "Apple iPhone 15 Pro", sku: "IPH-15P", price: 1199.00, stock: 20 },
        { name: "AirPods Pro (2nd Gen)", sku: "APP-2G", price: 249.00, stock: 35 },
        { name: "Samsung Galaxy S24", sku: "SGS-24", price: 899.00, stock: 18 },
        { name: "Sony WH-1000XM5", sku: "SNY-XM5", price: 399.00, stock: 15 },
        { name: "Logitech MX Master 3S", sku: "LOG-MX3S", price: 99.00, stock: 40 },
        { name: "Apple Watch Ultra 2", sku: "AW-U2", price: 799.00, stock: 10 },
        { name: "Dell UltraSharp 27\" 4K", sku: "DEL-U27", price: 549.00, stock: 8 },
        { name: "Magic Keyboard with Touch ID", sku: "APL-MKB", price: 179.00, stock: 25 },
        { name: "Anker 737 Power Bank", sku: "ANK-737", price: 129.00, stock: 30 }
      ];

      await supabase.from("products").upsert(sampleProducts, { onConflict: "sku" });
    }
  } catch (err) {
    console.warn("Seeding products skipped:", err);
  }
}
