import * as fs from "fs"
import * as path from "path"

export function getAllImagesInFolder(folderPath: string): string[] {
  const images: string[] = []

  // Read the contents of the directory
  const files = fs.readdirSync(folderPath)

  // Filter out only image files (you can adjust this filter based on your image file extensions)
  const imageExtensions = [".png", ".jpg", ".jpeg", ".gif", ".bmp", ".webp", ".svg"] // Add more if needed

  files.forEach((file) => {
    const extension = path.extname(file).toLowerCase()

    if (imageExtensions.includes(extension)) {
      images.push(`\/${folderPath}/${file}`)
      // images.push(path.join(folderPath, file))
    }
  })

  return images
}
